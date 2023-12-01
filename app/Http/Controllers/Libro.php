<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Libro extends Controller
{
    public function mostrarLibros(){
        $libros = DB::table('libros')
                    ->join('areaConocimiento','area', '=', 'idArea' )->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('libros.libros', ['libros'=> $libros]);
    }

    
}
