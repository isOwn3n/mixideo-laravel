<?php

namespace App\Interfaces\Repositories;

use App\Models\Order;

interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getByCartId(int $cart_id, string $col, string $opration, ?string $value): ?Order;
}
