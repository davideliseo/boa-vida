<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'nombre' => [
            'nombreCompleto' => 'Nombre',
            'class' => 'text-left',
            'reglas' => ['required']
        ],
        'precio' => [
            'nombreCompleto' => 'Precio',
            'reglas' => ['required', 'numeric']
        ],
        'cantidad' => [
            'nombreCompleto' => 'Cantidad',
            'reglas' => ['required', 'integer']
        ],
        'fecha_vencimiento' => [
            'nombreCompleto' => 'Fecha de vencimiento',
            'class' => 'text-left',
            'reglas' => ['nullable', 'date']
        ],
        'fecha_compra' => [
            'nombreCompleto' => 'Fecha de compra',
            'class' => 'text-left',
            'reglas' => ['nullable', 'date']
        ]
    ];

    public static function reglas()
    {
        return array_map(function ($e) {
            return $e['reglas'];
        }, Insumo::$indexables);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }
}
