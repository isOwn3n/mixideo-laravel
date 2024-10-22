<?php

namespace App\Services;

use App\Http\Requests\CartRequest;
use App\Interfaces\Repositories\CartItemRepositoryInterface;
use App\Interfaces\Repositories\CartRepositoryInterface;
use App\Interfaces\Repositories\OrderRepositoryInterface;
use App\Models\Cart;
use App\Models\CartItem;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CartService extends Service
{

    protected CartRepositoryInterface $cartRepository;
    protected OrderRepositoryInterface $orderRepository;
    protected CartItemRepositoryInterface $cartItemRepository;

    public function __construct(
        CartRepositoryInterface $cartRepository,
        OrderRepositoryInterface $orderRepository,
        CartItemRepositoryInterface $cartItemRepository
    ): void {
        $this->cartRepository = $cartRepository;
        $this->cartItemRepository = $cartItemRepository;
        $this->orderRepository = $orderRepository;
    }

    /**
     * Summary of handle_index
     * @param int $user_id
     * @return ?Cart
     */
    public function handle_index(int $user_id)
    {
        $cart = $this->get_cart($user_id);

        $has_order = $this->get_order($cart->id);

        $has_cart = $this->create_cart_not_available($cart, $has_order, $user_id);
        if ($has_cart instanceof Cart)
            $cart = $has_cart;
        return $cart;
    }

    /**
     * @param int $cart_id
     * @param int $product_id
     * @return int
     */

    public function create_new_item(int $cart_id, int $product_id): int
    {
        $new_item = $this->cartItemRepository->create(
            [
                'cart_id' => $cart_id,
                'product_id' => $product_id,
            ]
        );
        return $new_item->quantity;
    }

    /**
     * @param int $cart_id
     * @param int $product_id
     * @return ?CartItem
     */

    public function get_item(int $cart_id, int $product_id): ?CartItem
    {
        return $this->cartItemRepository->getItem($cart_id, $product_id);
    }


    public function add_new_item($cart_id, $id)
    {
        $quantity = $this->create_new_item($cart_id, $id);
        return response()->json([
            'product_id' => $id,
            'quantity' => $quantity,
        ], ResponseAlias::HTTP_OK);
    }

    public function add_item_quantity_or_create(CartRequest $request, int $user_id)
    {
        $cart = $this->get_cart($user_id);
        $item = $this->get_item($cart->id, $request->product_id);
        if (!$item)
            return $this->add_new_item($cart->id, $request->product_id);
        $quantity = 1;
        if ($request->has('quantity'))
            $quantity = $request->quantity;

        $this->increase_item_quantity($item, $quantity);
        return $item;
    }

    public function increase_item_quantity($item, $amount)
    {
        if ($item->product->quantity < $amount)
            return false;
        $item->quantity += $amount;
        $item->save();
        return true;
    }

    public function decrease_item_quantity($item, $amount)
    {
        if ($item->quantity <= $amount) {
            $item->delete();
            return false;
        }
        $item->quantity -= $amount;
        $item->save();
        return true;
    }

    public function subtract_item_quantity_or_delete(int $user_id, CartRequest $request)
    {
        $cart = $this->get_cart($user_id);
        $item = $this->get_item($cart->id, $request->product_id);

        if (!$item)
            return response()->json([
                'message' => 'You dont have this product in your cart.'
            ], ResponseAlias::HTTP_NOT_FOUND);

        if (!$request->has('quantity')) {
            $item->delete();
            return response()->json([
                'message' => 'Product deleted from your cart successfuly.',
            ], 200);
        }

        $this->decrease_item_quantity($item, $request->quantity);
        return response()->json([
            'message' => 'Product decreased from your cart successfuly.',
        ], 200);
    }
}
