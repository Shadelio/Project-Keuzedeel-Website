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
        'periode',
        'accepted_at',
    ];

    protected $casts = [
        'inschrijfdatum' => 'date',
        'accepted_at' => 'datetime',
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

    public function accepteer()
    {
        $this->status = 'geaccepteerd';
        $this->accepted_at = now();
        $this->save();
        
        // Update deelnemers count voor keuzedeel
        $this->keuzedeel->updateHuidigeDeelnemers();
    }

    public function weiger()
    {
        $this->status = 'geweigerd';
        $this->save();
        
        // Update deelnemers count voor keuzedeel
        $this->keuzedeel->updateHuidigeDeelnemers();
    }

    public function scopePerPeriode($query, $periode)
    {
        return $query->where('periode', $periode);
    }

    public function scopeGeaccepteerd($query)
    {
        return $query->where('status', 'geaccepteerd');
    }

    public function scopeIngeschreven($query)
    {
        return $query->where('status', 'ingeschreven');
    }
}
