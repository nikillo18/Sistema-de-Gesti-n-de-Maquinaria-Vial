<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class MachineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
         DB::table('machine__types')->insert([
        ['name' => 'XCMG'],
        ['name' => 'Cummins'],
        ['name' => 'Caterpillar'],
        ['name'=>  'Komatsu'],
        ['name'=>  'John Deere'],
        ['name'=>  'Sany']
        
    ]);
    }
    }
}
