<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'price', 'slug', 'description', 'type', 'image'];

    public function category()
    {
        return ($this->belongsTo(Category::class));
    }

    public function detail_orders()
    {
        return ($this->hasMany(DetailOrder::class));
    }
}
