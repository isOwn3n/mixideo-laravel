<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Services\CheckoutService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    protected CheckoutService $service;
    public function __construct(CheckoutService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $user = Auth::user();
        $cart = $this->service->index($user->id);
        if ($cart instanceof RedirectResponse)
            return $cart;

        $init_data = $this->get_init_data($cart);
        $has_address = $this->service->get_user_address($user->id);
        $has_address = is_null($has_address) ? false : true;

        return view(
            'cart.checkout',
            compact(
                'cart',
                'init_data',
                'has_address'
            )
        );
    }

    public function last_step()
    {
        $user = Auth::user();
        $cart = $this->service->last_step($user->id);
        if ($cart instanceof RedirectResponse)
            return $cart;
        $init_data = $this->get_init_data($cart);
        return view(
            'cart.last_step',
            compact(
                'cart',
                'init_data',
            )
        );
    }

    public function add_address(CheckoutRequest $request)
    {
        $user = Auth::user();
        
        // if (!$cart || !is_null($has_order) || $cart->totalQuantity < 1)
        //     return redirect()
        //         ->route('cart.index')
        //         ->withErrors(
        //             [
        //                 'checkout' => 'Please Before Checking out your orders choose a product.'
        //             ]
        //         );

        return redirect()->route('checkout.index');
    }
    // TODO: Move all same functionalities to a service file.
    public function payment()
    {
        $user = Auth::user();
        $cart = Cart::with('items')
            ->where('user_id', $user->id)
            ->orderBy('id', 'desc')
            ->first();

        $order = Order::where('cart_id', $cart->id);
        $has_order = $order
            ->where('status', 'completed')
            ->latest()
            ->first();

        if (!$cart || !is_null($has_order) || $cart->totalQuantity < 1)
            return redirect()
                ->route('cart.index')
                ->withErrors(
                    [
                        'checkout' => 'Please Before Checking out your orders choose a product.'
                    ]
                );

        if ($order) {
            $order = Order::where('cart_id', $cart->id)
                ->where('status', 'pending')
                ->latest()->first();
            $order->update(['status' => 'completed']);
        }
        return redirect()->route('cart.index');
    }
}
