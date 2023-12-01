<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
               'ISBN' => '101',
               'nombre' => 'Biologia Prinicipiante',
               'descripcion' => 'Libro de biologia para principiantes',
               'generoLiterario' => 'Ciencia',
               'precioUnitario' => '40.000',
               'observacion' => 'libro de pasta dura',
               'foto' => 'libro1.png',
               'area' => '01'
            ],
            [
                'ISBN' => '102',
                'nombre' => 'Leyes juridicas',
                'descripcion' => 'Libro de leyes colombianas',
                'generoLiterario' => 'Sociales',
                'precioUnitario' => '50.000',
                'observacion' => 'libro de pasta dura',
                'foto' => 'libro2.png',
                'area' => '02'
             ],
             [
                'ISBN' => '103',
                'nombre' => 'Teoria del color',
                'descripcion' => 'Libro de psicologia del color',
                'generoLiterario' => 'Arte',
                'precioUnitario' => '20.000',
                'observacion' => 'libro de pasta dura',
                'foto' => 'libro3.png',
                'area' => '03'
             ],
             [
                'ISBN' => '104',
                'nombre' => 'Primeros auxilios',
                'descripcion' => 'Libro de primeros auxilios',
                'generoLiterario' => 'salud',
                'precioUnitario' => '100.000',
                'observacion' => 'libro de pasta dura',
                'foto' => 'libro4.png',
                'area' => '04'
             ],
             [
                'ISBN' => '105',
                'nombre' => 'La iliada',
                'descripcion' => 'Libro de la iliada',
                'generoLiterario' => 'Literatura',
                'precioUnitario' => '70.000',
                'observacion' => 'libro de pasta dura',
                'foto' => 'libro5.png',
                'area' => '05'
             ],
             [
                'ISBN' => '106',
                'nombre' => 'Primeras recetas',
                'descripcion' => 'Libro de recetas modernas',
                'generoLiterario' => 'Cocina',
                'precioUnitario' => '90.000',
                'observacion' => 'libro de pasta dura',
                'foto' => 'libro6.png',
                'area' => '06'
             ],
    
            
        ];
        DB::table('libros')->insert($datos);
    }
}
