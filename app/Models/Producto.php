<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
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
        'fecha_elaboracion' => [
            'nombreCompleto' => 'Fecha de elaboración',
            'class' => 'text-left',
            'reglas' => ['nullable']
        ],
    ];

    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
}
