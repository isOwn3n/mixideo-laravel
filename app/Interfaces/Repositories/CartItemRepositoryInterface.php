<?php

namespace App\Interfaces\Repositories;

// Used for type checking;
use App\Models\CartItem;

interface CartItemRepositoryInterface extends RepositoryInterface
{
    public function getItem(int $cart_id, int $product_id): ?CartItem;
}
