<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'name' => [
            'displayName' => 'Nombre',
            'class' => 'text-left',
        ],
        'price' => [
            'displayName' => 'Precio',
        ],
        'quantity' => [
            'displayName' => 'Cantidad',
        ],
        'manufacturing_date' => [
            'displayName' => 'Fecha de elaboración',
            'class' => 'text-left',
        ],
        'expiry_date' => [
            'displayName' => 'Fecha de vencimiento',
            'class' => 'text-left',
        ],
    ];

    public function supply()
    {
        return $this->belongsToMany(Supply::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
