<?php

namespace App\Repositories;
use App\Interfaces\Repositories\CartRepositoryInterface;
use App\Models\Cart;

class CartRepository implements CartRepositoryInterface
{
    protected Cart $model;

    public function __construct(Cart $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create([
            'user_id' => $data['user_id'],
        ]);
    }

    public function getById(int $id)
    {
        return $this->model->where('id', $id);
    }

    public function get_last_by_user_id(int $user_id): Cart|null
    {
        return $this->model
            ->with('items')
            ->where('user_id', $user_id)
            ->orderBy('id', 'desc')
            ->first();
    }
}
