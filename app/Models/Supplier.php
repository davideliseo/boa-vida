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
            'rules' => ['required']
        ],
        // TODO: validación RUT.
        'rut' => [
            'displayName' => 'RUT',
            'class' => 'text-left',
            'rules' => ['nullable', 'unique']
        ],
        'address' => [
            'displayName' => 'Dirección',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
        'email' => [
            'displayName' => 'E-mail',
            'class' => 'text-left',
            'rules' => ['nullable', 'email']
        ],
        // TODO: validación número de teléfono.
        'phone_number' => [
            'displayName' => 'Teléfono',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
        'contact_name' => [
            'displayName' => 'Nombre de contacto',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
    ];

    public static function rules()
    {
        return array_map(function ($e) {
            return $e['rules'];
        }, Supplier::$indexables);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }
}
