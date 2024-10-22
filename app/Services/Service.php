<?php

namespace App\Services;

use App\Interfaces\Repositories\CartRepositoryInterface;
use App\Interfaces\Repositories\OrderRepositoryInterface;

// Used for type checking.
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
// Used for type checking.

// TODO: Create Interface for Services Too.
abstract class Service
{

    protected CartRepositoryInterface $cartRepository;
    protected OrderRepositoryInterface $orderRepository;

    public function __construct(
        CartRepositoryInterface $cartRepository,
        OrderRepositoryInterface $orderRepository
    ) {
        $this->cartRepository = $cartRepository;
        $this->orderRepository = $orderRepository;
    }

    public function get_cart(int $user_id): ?Cart
    {
        return $this->cartRepository->get_last_by_user_id($user_id);
    }

    public function get_order(
        int $cart_id,
        string $col = 'status',
        string $operation = 'completed',
        ?string $value = null
    ): ?Order {
        return $this->orderRepository->getByCartId($cart_id, $col, $operation, $value);
    }

    public function create_cart_not_available(?Cart $cart, ?Order $order, int $user_id): Cart|false
    {
        if (!$cart || !is_null($order)) {
            return $this
                ->cartRepository
                ->create(
                    ['user_id' => $user_id]
                )
                ->load('items');
        }
        return false;
    }

    protected function get_product_builder(): Product
    {
        return Product::whereNull('deleted_at');
    }

    public function get_products(int $perPage): LengthAwarePaginator
    {
        return $this->get_product_builder()->paginate($perPage);
    }

    public function get_featured_products(int $perPage): LengthAwarePaginator
    {
        return $this
            ->get_product_builder()
            ->where('featured', true)
            ->orderBy('rating', 'desc')
            ->paginate($perPage);
    }

    public function get_top_rating_products(int $perPage): LengthAwarePaginator
    {
        return $this
            ->get_product_builder()
            ->orderBy('rating', 'desc')
            ->paginate($perPage);
    }
}
