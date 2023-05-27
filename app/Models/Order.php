<?php

namespace App\Models;

use App\Models\User;
use App\Models\Addresse;
use App\Models\DetailOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'user_id', 'addresse_id', 'shipping_type', 'note', 'total', 'payment_method'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addresse()
    {
        return $this->belongsTo(Addresse::class);
    }
    public function detail_order()
    {
        return ($this->hasMany(DetailOrder::class));
    }
    // public function category()
    // {
    //     return ($this->belongsTo(Category::class));
    // }
}
