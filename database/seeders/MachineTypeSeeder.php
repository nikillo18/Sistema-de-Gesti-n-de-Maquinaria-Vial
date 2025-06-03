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
        ['name' => 'Motoniveladora'],
        ['name' => 'Retroexcavadora'],
        ['name' => 'Excavadora hidráulica'],
        ['name'=>  'Pala cargadora'],
        ['name'=>  'Bulldozer'],
        ['name'=>  'Camión volcador '],
        ['name'=>  'Camión regador '],
        ['name'=>  'Fresadora de asfalto'],
        ['name'=>  'Terminadora de asfalto'],
        ['name'=>  'Martillo hidráulico'],
        ['name'=>  'Camión hormigonero'],
        ['name'=>  'Planta de asfalto'],
    ]);
    }
    }
}
