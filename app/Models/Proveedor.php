<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'nombre' => [
            'nombreCompleto' => 'Nombre',
            'class' => 'text-left',
            'reglas' => ['required']
        ],
        // TODO: validación RUT.
        'rut' => [
            'nombreCompleto' => 'RUT',
            'class' => 'text-left',
            'reglas' => ['nullable', 'unique']
        ],
        'direccion' => [
            'nombreCompleto' => 'Dirección',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
        'correo' => [
            'nombreCompleto' => 'Correo',
            'class' => 'text-left',
            'reglas' => ['nullable', 'email']
        ],
        // TODO: validación número de teléfono.
        'telefono' => [
            'nombreCompleto' => 'Teléfono',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
        'nombre_contacto' => [
            'nombreCompleto' => 'Nombre de contacto',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
    ];

    public static function reglas()
    {
        return array_map(function ($e) {
            return $e['reglas'];
        }, Proveedor::$indexables);
    }

    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
}
