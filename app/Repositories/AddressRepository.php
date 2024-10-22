<?php

namespace App\Repositories;

use App\Interfaces\Repositories\AddressRepositoryInterface;
use App\Models\Address;

class AddressRepository implements AddressRepositoryInterface
{
    protected Address $model;

    public function __construct(Address $model)
    {
        $this->model = $model;
    }

    public function getAddressByUserId(int $user_id): ?Address
    {
        return $this->model->where('user_id', $user_id)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
