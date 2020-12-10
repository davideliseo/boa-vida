<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    // TODO: confirmar.
    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
}
