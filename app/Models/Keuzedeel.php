<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuzedeel extends Model
{
    protected $table = 'keuzedelen';
    
    protected $fillable = [
        'titel',
        'beschrijving',
        'code',
        'ec',
        'niveau',
        'status',
        'max_deelnemers',
        'huidige_deelnemers',
        'startdatum',
        'einddatum',
        'docent',
        'locatie',
        'voorwaarden',
        'image_url',
    ];

    protected $casts = [
        'startdatum' => 'date',
        'einddatum' => 'date',
        'inschrijfdatum' => 'date',
    ];

    public function inschrijvingen()
    {
        return $this->hasMany(Inschrijving::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'inschrijvingen')
                    ->withPivot('status', 'inschrijfdatum', 'opmerkingen')
                    ->withTimestamps();
    }

    public function isVol()
    {
        return $this->max_deelnemers && $this->huidige_deelnemers >= $this->max_deelnemers;
    }

    public function isBeschikbaar()
    {
        return $this->status === 'beschikbaar' && !$this->isVol();
    }
}
