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
            'nombreCompleto' => 'Nombre',
            'class' => 'text-left',
            'reglas' => ['required']
        ],
        'email' => [
            'nombreCompleto' => 'E-mail',
            'class' => 'text-left',
            'reglas' => ['required', 'email']
        ],
        'rut' => [
            'nombreCompleto' => 'RUT',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
        'direccion' => [
            'nombreCompleto' => 'Dirección',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
        'telefono' => [
            'nombreCompleto' => 'Teléfono',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
    ];

    public static function reglas()
    {
        return array_map(function ($e) {
            return $e['reglas'];
        }, User::$indexables);
    }
}
