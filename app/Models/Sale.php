<?php

namespace App\Models;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'amount' => [
            'displayName' => 'Monto',
        ],
        // TODO: corregir validación
        'status' => [
            'displayName' => 'Estado',
        ],
        'client_name' => [
            'displayName' => 'Nombre cliente',
            'class' => 'text-left',
        ],
        'client_phone_number' => [
            'displayName' => 'Teléfono cliente',
            'class' => 'text-left',
        ],
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
