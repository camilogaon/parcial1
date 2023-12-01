<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areaConocimiento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
               'idArea' => '01',
               'descripcion' => 'Ciencias Naturales'
            ],
            [
                'idArea' => '02',
                'descripcion' => 'Ciencias Humanas, Sociales y jurídicas'
             ],
             [
                'idArea' => '03',
                'descripcion' => 'Artes'
             ],
             [
                'idArea' => '04',
                'descripcion' => 'Ciencias de la Salud'
             ],
             [
                'idArea' => '05',
                'descripcion' => 'Literatura'
             ],
             [
                'idArea' => '06',
                'descripcion' => 'Gastronomía y cocina'
             ],
            
        ];
        DB::table('areaConocimiento')->insert($datos);
    }
}
