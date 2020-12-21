<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'name' => [
            'displayName' => 'Nombre',
            'class' => 'text-left',
        ],
        'rut' => [
            'displayName' => 'RUT',
            'class' => 'text-left',
        ],
        'address' => [
            'displayName' => 'Dirección',
            'class' => 'text-left',
        ],
        'email' => [
            'displayName' => 'E-mail',
            'class' => 'text-left',
            'rules' => ['nullable', 'email']
        ],
        'phone_number' => [
            'displayName' => 'Teléfono',
            'class' => 'text-left',
        ],
        'contact_name' => [
            'displayName' => 'Nombre de contacto',
            'class' => 'text-left',
        ],
    ];

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }
}
