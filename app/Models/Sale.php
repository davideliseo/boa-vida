<?php

namespace App\Models;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public static function formatStatus($status)
    {
        if ($status == 'completed') {
            return __('Completada');
        } else if ($status == 'pending') {
            return __('Pendiente');
        } else if ($status == 'failed') {
            return __('Fallida');
        }
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
