<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'monto' => [
            'nombreCompleto' => 'Monto',
            'reglas' => ['required', 'numeric']
        ],
        'nombre_cliente' => [
            'nombreCompleto' => 'Nombre cliente',
            'class' => 'text-left',
            'reglas' => ['required']
        ],
        'telefono_cliente' => [
            'nombreCompleto' => 'Teléfono cliente',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
    ];

    public static function reglas()
    {
        return array_map(function ($e) {
            return $e['reglas'];
        }, Venta::$indexables);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
