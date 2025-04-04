<?php

namespace Nazarene\Backend\Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(MinistrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(ChurchSeeder::class);
        $this->call(MemberSeeder::class);

    }
}
