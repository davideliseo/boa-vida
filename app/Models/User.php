<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasArea($area)
    {
        return $this->areas()->where('areas.value', $area)->exists();
    }

    public function doesNotHaveArea($area)
    {
        return !$this->hasArea($area);
    }

    public function anyArea(...$areas)
    {
        foreach ($areas as $area) {
            if ($this->areas()->where('areas.value', $area)->exists()) {
                return true;
            }
        }

        return false;
    }

    public function everyArea(...$areas)
    {
        foreach ($areas as $area) {
            if ($this->areas()->where('areas.value', $area)->exists()) {
                return true;
            }
        }

        return false;
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class)
            ->withTimestamps();
    }

    public static function arePeers($area, User $a, User $b)
    {
        return $a->hasArea($area) && $b->hasArea($area);
    }
    public static function areNotPeers($area, User $a, User $b)
    {
        return !User::arePeers($area, $a, $b);
    }
}
