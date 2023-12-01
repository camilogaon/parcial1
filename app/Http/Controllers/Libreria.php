<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Libreria extends Controller
{
    public function mostrarPresentacion(){
        return view('libreria.libreria');
    }
}
