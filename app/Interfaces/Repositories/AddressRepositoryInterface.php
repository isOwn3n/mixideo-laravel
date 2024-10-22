<?php

namespace App\Interfaces\Repositories;

use App\Models\Address;

interface AddressRepositoryInterface extends RepositoryInterface
{
    public function getAddressByUserId(int $user_id): ?Address;
}
