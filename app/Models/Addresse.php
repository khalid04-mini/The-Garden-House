<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Addresse extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'street', 'city', 'state', 'zip_code', 'phone', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
