<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $indexables = [
        'amount' => [
            'displayName' => 'Monto',
            'rules' => ['required', 'numeric']
        ],
        'client_name' => [
            'displayName' => 'Nombre cliente',
            'class' => 'text-left',
            'rules' => ['required']
        ],
        'client_phone_number' => [
            'displayName' => 'Teléfono cliente',
            'class' => 'text-left',
            'rules' => ['nullable']
        ],
    ];

    public static function rules()
    {
        return array_map(function ($e) {
            return $e['rules'];
        }, Sale::$indexables);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
