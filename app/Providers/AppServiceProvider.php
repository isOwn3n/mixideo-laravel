<?php

namespace App\Providers;

use App\Interfaces\Repositories\AddressRepositoryInterface;
use App\Interfaces\Repositories\CartRepositoryInterface;
use App\Interfaces\Repositories\OrderRepositoryInterface;
use App\Repositories\AddressRepository;
use App\Repositories\CartRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register Repositories
        $this
            ->app
            ->bind(CartRepositoryInterface::class, CartRepository::class);
        $this
            ->app
            ->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this
            ->app
            ->bind(AddressRepositoryInterface::class, AddressRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
