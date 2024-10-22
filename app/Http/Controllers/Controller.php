<?php

namespace App\Http\Controllers;
use App\Models\Cart;

abstract class Controller
{
    public function get_init_data(Cart $cart)
    {
        $top_cart = $cart->items->slice(-3);
        $items_count = $cart->items->count();
        $totalPrice = $cart->totalPrice;

        return [
            'top_cart' => $top_cart,
            'items_count' => $items_count,
            'totalPrice' => $totalPrice
        ];
    }
}
