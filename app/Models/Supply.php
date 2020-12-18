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
            'rules' => ['required']
        ],
        'price' => [
            'displayName' => 'Precio',
            'rules' => ['required', 'numeric']
        ],
        'quantity' => [
            'displayName' => 'Cantidad',
            'rules' => ['required', 'integer']
        ],
        'expiry_date' => [
            'displayName' => 'Fecha de vencimiento',
            'class' => 'text-left',
            'rules' => ['nullable', 'date']
        ],
        'purchase_date' => [
            'displayName' => 'Fecha de compra',
            'class' => 'text-left',
            'rules' => ['nullable', 'date']
        ]
    ];

    public static function rules()
    {
        return array_map(function ($e) {
            return $e['rules'];
        }, Supply::$indexables);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
