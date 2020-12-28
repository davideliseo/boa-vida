<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supplies()
    {
        return $this->belongsToMany(Supply::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
