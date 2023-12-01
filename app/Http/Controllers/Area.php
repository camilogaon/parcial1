<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Area extends Controller
{
    public function mostrarAreas(){
        $areas = DB::table('areaConocimiento')->get();
                    // select * from programa join facultad on facultad= codfacultad;
        return view('areas.areas', ['areas'=> $areas]);
    }


}
