<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supply()
    {
        return $this->belongsToMany(Supply::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }

    public static function format($key, $value)
    {
        if ($key == 'id') {
            return '#' . $value;
        } else if ($key == 'status') {
            return Sale::formatStatus($value);
        } else if ($key == 'amount') {
            return '$' . $value;
        } else if (is_a($value, 'DateTime')) {
            return strftime("%d-%m-%Y (%H:%M:%S)", $value->getTimestamp());
        } else {
            return $value;
        }
    }
}
