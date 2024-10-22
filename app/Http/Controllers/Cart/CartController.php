<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as ResponseAlias;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    protected CartService $service;

    public function __construct(CartService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $cart = $this->service->handle_index($user_id);

        $init_data = $this->get_init_data($cart);

        return view(
            'cart.cart',
            compact(
                'cart',
                'init_data',
            )
        );
    }

    public function add_item(CartRequest $request)
    {
        $user = $request->user();
        $item = $this->service->add_item_quantity_or_create($request, $user->id);
        if ($item instanceof JsonResponse)
            return $item;

        return response()->json([
            'product_id' => $request->product_id,
            'quantity' => $item->quantity
        ], ResponseAlias::HTTP_OK);
    }

    public function delete_item(CartRequest $request)
    {
        $user = $request->user();
        return $this
            ->service
            ->subtract_item_quantity_or_delete($user->id, $request);
    }
}
