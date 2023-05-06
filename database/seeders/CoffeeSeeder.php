<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffees = [
            [
                'coffee_id' => 'ESP001',
                'coffeeName' => 'Caffè Americano',
                'type' => 'Espresso',
                'coffeePrice' => 38000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'ESP002',
                'coffeeName' => 'Cappuccino',
                'type' => 'Espresso',
                'coffeePrice' => 47000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'ESP003',
                'coffeeName' => 'Caramel Macchiato',
                'type' => 'Espresso',
                'coffeePrice' => 60000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'ESP004',
                'coffeeName' => 'Vanilla Lattè',
                'type' => 'Espresso',
                'coffeePrice' => 53000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BLD001',
                'coffeeName' => 'Java Chip Frappuccino',
                'type' => 'Blended',
                'coffeePrice' => 58000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BLD002',
                'coffeeName' => 'Asian Dolce Frappuccino',
                'type' => 'Blended',
                'coffeePrice' => 53000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BLD003',
                'coffeeName' => 'Mocha Frappuccino',
                'type' => 'Blended',
                'coffeePrice' => 53000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BRW001',
                'coffeeName' => 'Cold Brew',
                'type' => 'Brewed',
                'coffeePrice' => 41000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BRW002',
                'coffeeName' => 'Vanilla Sweet Cream Cold Brew',
                'type' => 'Brewed',
                'coffeePrice' => 47000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'BRW003',
                'coffeeName' => 'Freshly Brewed Coffee',
                'type' => 'Brewed',
                'coffeePrice' => 23000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'NON001',
                'coffeeName' => 'Signature Chocolate',
                'type' => 'Others',
                'coffeePrice' => 55000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'NON0032',
                'coffeeName' => 'Green Tea Latte',
                'type' => 'Others',
                'coffeePrice' => 55000,
                'stock' => 50,
            ],
            [
                'coffee_id' => 'NON003',
                'coffeeName' => 'Classic Chocolate',
                'type' => 'Others',
                'coffeePrice' => 44000,
                'stock' => 50,
            ],
        ];

        foreach ($coffees as $coffee) {
            Coffee::create($coffee);
        }
    }
}
