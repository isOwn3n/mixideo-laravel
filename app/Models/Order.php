<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // TODO: Add some new fields.
    protected $fillable = [
        'user_id',
        'cart_id',
        'status',
        'total',
        'subtotal',
        'address_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'id', 'cart_id');
    }

    public function address() {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
}
