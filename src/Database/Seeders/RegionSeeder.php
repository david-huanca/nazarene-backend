<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['id' => 1, 'name' => 'América del Sur']);
        Region::create(['id' => 2, 'name' => 'Brasil', 'isSubRegion' => true, 'parent_id' => 1]);
    }
}
