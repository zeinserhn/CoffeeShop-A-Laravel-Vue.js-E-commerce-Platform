<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->has(
                Order::factory()
                    ->count(3)
                    ->hasAttached(
                        Product::factory()->count(5),
                        ['total_price' => rand(100, 500), 'total_quantity' => rand(1, 3)]
                    )
            )
            ->create();
            
    }
}
