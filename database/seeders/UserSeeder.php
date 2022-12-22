<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // these are admin users
        $users = [
            [
                'name' => 'Cary Huit',
                'password' => bcrypt('viewer'),
                'email' => 'viewer@mailnator.com',
                'email_verified_at' => now(),
                'role' => "viewer",
            ],

        ];

        foreach($users as $user) {
            User::create($user)->assignRole('viewer');
        }
    }
}
