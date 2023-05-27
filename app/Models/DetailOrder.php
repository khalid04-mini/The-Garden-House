<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'order_id', 'quantity', 'prix'];

    public function order()
    {
        return ($this->belongsTo(Order::class));
    }

    public function product()
    {
        return ($this->belongsTo(Product::class));
    }
}
