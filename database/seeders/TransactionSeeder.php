<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'user_id' => '2',
                'coffee_id' => '5',
                'transactionDate' => '2023-03-18 18:11:23',
            ],
            [
                'user_id' => '1',
                'coffee_id' => '1',
                'transactionDate' => '2023-03-19 19:55:30',
            ],
            [
                'user_id' => '2',
                'coffee_id' => '12',
                'transactionDate' => '2023-03-19 18:00:05',
            ],
            [
                'user_id' => '1',
                'coffee_id' => '4',
                'transactionDate' => '2023-03-20 20:19:01',
            ],
            [
                'user_id' => '1',
                'coffee_id' => '8',
                'transactionDate' => '2023-03-21 11:05:44',
            ],
            [
                'user_id' => '2',
                'coffee_id' => '5',
                'transactionDate' => '2023-03-21 16:08:09',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
