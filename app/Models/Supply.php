<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
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
        'expiry_date' => [
            'displayName' => 'Fecha de vencimiento',
            'class' => 'text-left',
        ],
        'purchase_date' => [
            'displayName' => 'Fecha de compra',
            'class' => 'text-left',
        ]
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
