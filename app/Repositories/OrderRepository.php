<?php

namespace App\Repositories;

use App\Interfaces\Repositories\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected Order $model;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function getByCartId(int $cart_id, string $col, string $opration, ?string $value): ?Order
    {
        return $this
            ->model
            ->where('cart_id', $cart_id)
            ->where($col, $opration, $value)
            ->first();
    }
}
