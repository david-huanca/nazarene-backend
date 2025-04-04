<?php

namespace Nazarene\Backend\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserNazareneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'David',
            'last_name' => 'Huanca',
            'email' => 'dhuanca@samnaz.org',
            'password' => bcrypt("password"),
            'created_at' => now()->subSeconds(5),
            'updated_at' => now()->subSeconds(4),
            'email_verified_at' => now()->subSeconds(3)
        ]);

        // $user->assignRole('Super Admin');

        $user = User::create([
            'name' => 'User',
            'last_name' => 'Devops',
            'email' => 'devops@samnaz.org',
            'password' => bcrypt("password"),
            'created_at' => now()->subSeconds(5),
            'updated_at' => now()->subSeconds(4),
            'email_verified_at' => now()->subSeconds(3)
        ]);

        // $user->assignRole('Simple User');


    }
}
