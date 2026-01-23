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
        if (!$this->max_deelnemers) {
            return false;
        }
        
        // Tel het aantal geaccepteerde inschrijvingen
        $aantalIngeschreven = $this->inschrijvingen()
            ->where('status', 'geaccepteerd')
            ->count();
            
        return $aantalIngeschreven >= $this->max_deelnemers;
    }

    public function getHuidigeDeelnemersAttribute()
    {
        return $this->inschrijvingen()
            ->where('status', 'geaccepteerd')
            ->count();
    }

    public function isBeschikbaar()
    {
        return $this->status === 'beschikbaar' && !$this->isVol();
    }
}
