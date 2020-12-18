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
        'manufacturing_date' => [
            'displayName' => 'Fecha de elaboración',
            'class' => 'text-left',
            'rules' => ['nullable', 'date']
        ],
        'expiry_date' => [
            'displayName' => 'Fecha de vencimiento',
            'class' => 'text-left',
            'rules' => ['nullable', 'date']
        ],
    ];

    public static function rules()
    {
        return array_map(function ($e) {
            return $e['rules'];
        }, Product::$indexables);
    }

    public function supply()
    {
        return $this->belongsToMany(Supply::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
