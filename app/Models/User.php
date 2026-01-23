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
}
