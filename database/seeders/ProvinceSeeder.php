<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('provinces')->insert([
        ['name' => 'Buenos Aires'],
        ['name' => 'Córdoba'],
        ['name' => 'Santa Fe'],
        ['name'=>  'Salta'],
        ['name'=>  'Jujuy'],
        ['name'=>  'Entre Rios'],
        ['name'=>  'Formosa'],
        ['name'=>  'Chaco'],
        ['name'=>  'Tierra del Fuego'],
        ['name'=>  'Tucuman'],
        ['name'=>  'Santiago del Estero'],
        ['name'=>  'Santa Cruz'],
        ['name'=>  'San Luis'],
        ['name'=>  'San Juan'],
        ['name'=>  'Rio Negro'],
        ['name'=>  'Neuquen'],
        ['name'=>  'Misiones'],
        ['name'=>  'Mendoza'],
        ['name'=>  'La Pampa'],
        ['name'=>  'Catamarca'],
        ['name'=>  'Chubut'],
        ['name'=>  'Corrientes'],
        ['name'=>  'La Rioja'],
        ['name'=>  'CABA']
        
    ]);
    }
}
