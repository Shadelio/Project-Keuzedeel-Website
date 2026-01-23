<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inschrijving extends Model
{
    protected $table = 'inschrijvingen';
    
    protected $fillable = [
        'user_id',
        'keuzedeel_id',
        'status',
        'inschrijfdatum',
        'opmerkingen',
    ];

    protected $casts = [
        'inschrijfdatum' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keuzedeel()
    {
        return $this->belongsTo(Keuzedeel::class);
    }

    public function isGeaccepteerd()
    {
        return $this->status === 'geaccepteerd';
    }

    public function isIngeschreven()
    {
        return $this->status === 'ingeschreven';
    }
}
