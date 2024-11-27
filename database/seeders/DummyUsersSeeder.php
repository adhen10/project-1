<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Adhen',
                'email' => 'adhen@gmail.com',
                'role' => '1',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Firman',
                'email' => 'firman@gmail.com',
                'role' => '2',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Firdaus',
                'email' => 'firdaus@gmail.com',
                'role' => '3',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($userData as $user) {
            User::create($user);
        }
    }
}
