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

    public function hasRole($role)
    {
        return $this->roles()->where('roles.name', $role)->exists();
    }

    public function doesNotHaveRole($role)
    {
        return !$this->hasRole($role);
    }

    public function anyRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles()->where('roles.name', $role)->exists()) {
                return true;
            }
        }

        return false;
    }

    public function everyRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles()->where('roles.name', $role)->exists()) {
                return true;
            }
        }

        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)
            ->using(RoleUser::class)
            ->withPivot('permissions')
            ->withTimestamps();
    }

    public static function arePeers($role, User $a, User $b)
    {
        return $a->hasRole($role) && $b->hasRole($role);
    }
    public static function areNotPeers($role, User $a, User $b)
    {
        return !User::arePeers($role, $a, $b);
    }

    public static function format($key, $value)
    {
        if ($key == 'id') {
            return '#' . $value;
        } else if ($key == 'status') {
            return Sale::formatStatus($value);
        } else if ($key == 'amount') {
            return '$' . $value;
        } else if (is_a($value, 'DateTime')) {
            return strftime("%d-%m-%Y (%H:%M:%S)", $value->getTimestamp());
        } else {
            return $value;
        }
    }
}
