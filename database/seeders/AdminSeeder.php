<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
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
                'name' => 'Curator',
                'password' => bcrypt('admin'),
                'email' => 'curator@yahoo.com',
                'role' => "curator",
                'email_verified_at' => now(),
            ],
        ];

        foreach($users as $user) {
            User::create($user)->assignRole('curator');
        }
    }
}
