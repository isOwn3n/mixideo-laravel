<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    protected MainService $service;
    public function __construct(MainService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $user = Auth::user();

        $items = $this->service->index($user->id);
        $cart = $items['cart'];
        $products = $items['products'];

        $init_data = $this->get_init_data($cart);

        return view(
            'index',
            compact(
                'cart',
                'init_data',
                'products',
            )
        );
    }
}
