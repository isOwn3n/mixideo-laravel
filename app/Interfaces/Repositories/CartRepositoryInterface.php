<?php

namespace App\Interfaces\Repositories;

use App\Models\Cart;

interface CartRepositoryInterface extends RepositoryInterface
{
    public function get_last_by_user_id(int $user_id): ?Cart;
    public function getById(int $id);
}
