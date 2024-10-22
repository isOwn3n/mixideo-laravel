<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['pending', 'completed', 'cancelled'];
        return [
            'user_id' => User::all()->random()->id,
            'cart_id' => Cart::all()->random()->id,
            'status' => $statuses[array_rand($statuses)],
            'total' => Cart::all()->random()->totalPrice + 9.00,
            'subtotal' => Cart::all()->random()->totalPrice,
            'address_id' => Address::all()->random()->id,
        ];
    }
}
