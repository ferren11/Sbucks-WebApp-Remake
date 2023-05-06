<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'user_id' => 'US000001',
                'name' => 'Vico Lomar',
                'email' => 'vico.lomar@example.com',
                'password' => bcrypt('password'),
                'loyaltyStatus' => 'Gold',
                'points' => 187,
            ],
            [
                'user_id' => 'US000002',
                'name' => 'Fei Fei Li',
                'email' => 'fei2.li@example.com',
                'password' => bcrypt('password'),
                'loyaltyStatus' => 'Green',
                'points' => 91,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
