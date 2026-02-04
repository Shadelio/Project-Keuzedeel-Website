<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function inschrijvingen()
    {
        return $this->hasMany(Inschrijving::class);
    }

    public function keuzedelen()
    {
        return $this->belongsToMany(Keuzedeel::class, 'inschrijvingen')
                    ->withPivot('status', 'inschrijfdatum', 'opmerkingen')
                    ->withTimestamps();
    }

    public function isIngeschrevenVoorKeuzedeel($keuzedeelId)
    {
        return $this->inschrijvingen()->where('keuzedeel_id', $keuzedeelId)->exists();
    }

    public function heeftKeuzedeelVoltooid($keuzedeelId)
    {
        return $this->inschrijvingen()
            ->where('keuzedeel_id', $keuzedeelId)
            ->where('status', 'voltooid')
            ->exists();
    }

    public function heeftKeuzedeelAlGedaan($keuzedeelId)
    {
        return $this->inschrijvingen()
            ->where('keuzedeel_id', $keuzedeelId)
            ->whereIn('status', ['voltooid', 'geaccepteerd'])
            ->exists();
    }

    public function heeftInschrijvingInPeriode($startdatum, $einddatum)
    {
        return $this->inschrijvingen()
            ->whereIn('status', ['geaccepteerd', 'ingeschreven'])
            ->whereHas('keuzedeel', function($query) use ($startdatum, $einddatum) {
                $query->where(function($q) use ($startdatum, $einddatum) {
                    // Check for overlapping periods
                    $q->where('startdatum', '<=', $einddatum)
                      ->where('einddatum', '>=', $startdatum);
                });
            })
            ->exists();
    }

    public function getConflicterendKeuzedeel($startdatum, $einddatum)
    {
        $inschrijving = $this->inschrijvingen()
            ->whereIn('status', ['geaccepteerd', 'ingeschreven'])
            ->whereHas('keuzedeel', function($query) use ($startdatum, $einddatum) {
                $query->where(function($q) use ($startdatum, $einddatum) {
                    $q->where('startdatum', '<=', $einddatum)
                      ->where('einddatum', '>=', $startdatum);
                });
            })
            ->with('keuzedeel')
            ->first();

        return $inschrijving ? $inschrijving->keuzedeel : null;
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isStudent()
    {
        return $this->role === 'student';
    }

    public function isSlb()
    {
        return $this->role === 'slb';
    }

    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeStudents($query)
    {
        return $query->where('role', 'student');
    }

    public function scopeSlb($query)
    {
        return $query->where('role', 'slb');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
