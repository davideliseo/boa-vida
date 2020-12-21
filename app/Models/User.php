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

    public static $indexables = [
        'name' => [
            'displayName' => 'Nombre',
            'class' => 'text-left',
            'rules' => ['required']
        ],
        'email' => [
            'displayName' => 'E-mail',
            'class' => 'text-left',
            'rules' => ['required', 'email']
        ],
        'rut' => [
            'displayName' => 'RUT',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
        'address' => [
            'displayName' => 'Dirección',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
        'phone_number' => [
            'displayName' => 'Teléfono',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
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
}
