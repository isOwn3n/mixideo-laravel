<?php

namespace App\Repositories;

use App\Interfaces\Repositories\CartItemRepositoryInterface;
use App\Models\CartItem;

class CartRepository implements CartItemRepositoryInterface
{
    protected CartItem $model;

    public function __construct(CartItem $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create([
            'cart_id' => $data['cart_id'],
            'product_id' => $data['product_id'],
            'quantity' => 1
        ]);
    }

    public function getItem(int $cart_id, int $product_id): ?CartItem
    {
        return $this->model->where('cart_id', $cart_id)
            ->where('product_id', $product_id)
            ->first();
    }
}
