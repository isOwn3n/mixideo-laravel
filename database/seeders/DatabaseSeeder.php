<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Database\Factories\AddressFactory;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'firstname' => 'Alireza',
            'lastname' => 'Ezati',
            'email' => 'alireza.ezzatiy@gmail.com',
            'password' => bcrypt('amirreza1'),
            'birthday' => '2000-05-08',
            // 'is_male' => true,
        ]);
        User::factory(150)->create();
        Address::factory(10)->create();

        Category::factory(10)->create();
        Product::factory(90)->create();
        Cart::factory(190)->create();
        CartItem::factory(380)->create();
        Order::factory(190)->create();
    }
}
