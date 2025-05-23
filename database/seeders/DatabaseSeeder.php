<?php

namespace Database\Seeders;

use App\Models\Machine_Type;
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

        $this->call(ProvinceSeeder::class);
        $this->call(MachineTypeSeeder::class);

    }
}
