<?php

namespace App\Services;

use App\Interfaces\Repositories\AddressRepositoryInterface;
use App\Interfaces\Repositories\CartRepositoryInterface;
use App\Interfaces\Repositories\OrderRepositoryInterface;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;

class CheckoutService extends Service
{
    protected AddressRepositoryInterface $addressRepository;

    public function __construct(
        AddressRepositoryInterface $addressRepository,
        CartRepositoryInterface $cartRepository,
        OrderRepositoryInterface $orderRepository,
    ) {
        parent::__construct($cartRepository, $orderRepository);
        $this->addressRepository = $addressRepository;
    }

    public function is_valid_order(?Cart $cart, ?Order $has_order): bool|RedirectResponse
    {
        if (!$cart || $cart->totalQuantity < 1 || !is_null($has_order))
            return redirect()
                ->route('cart.index')
                ->withErrors(
                    [
                        'checkout' => 'Please Before Checking out your orders choose a product.'
                    ]
                );
        return false;
    }
    public function index(int $user_id): Cart|RedirectResponse|null
    {
        $cart = $this->get_cart($user_id);

        $order = $this->get_order($cart->id);
        $order_validation = $this->is_valid_order($cart, $order);
        if ($order_validation !== false)
            return $order_validation;
        return $cart;
    }

    public function get_user_address(int $user_id): ?Address
    {
        return $this->addressRepository->getAddressByUserId($user_id);
    }

    public function last_step(int $user_id): Cart|RedirectResponse|null
    {
        $cart = $this->get_cart($user_id);

        $order = $this->get_order($cart->id);
        $order_validation = $this->is_valid_order($cart, $order);
        if ($order_validation !== false)
            return $order_validation;
        return $cart;
    }

    public function add_address(int $user_id, array $data): ?Cart
    {
        $cart = $this->get_cart($user_id);

        $address = $this->addressRepository->create($data);
        $order = $this->orderRepository->create([
            'user_id' => $user_id,
            'cart_id' => $cart->id,
            'total' => 0,
            'subtotal' => 0,
            'address_id' => $address->id,
        ]);
        // $order = $this->get_order($cart->id);
        // $order_validation = $this->is_valid_order($cart, $order);
        // if ($order_validation !== false)
        //     return $order_validation;
        return $cart;
    }
}
