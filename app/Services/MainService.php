<?php

namespace App\Services;

class MainService extends Service
{
    public function index(int $user_id)
    {
        $cart = $this->get_cart($user_id);
        $has_order = $this->get_order($cart->id);

        $has_cart = $this->create_cart_not_available($cart, $has_order, $user_id);
        if ($has_cart)
            $cart = $has_cart;
        $featured_products = $this->get_featured_products(16);
        $top_rate_products = $this->get_top_rating_products(16);

        return [
            'cart' => $cart,
            'products' => [
                'featured' => $featured_products,
                'top_rate' => $top_rate_products,
            ]
        ];
    }
}
