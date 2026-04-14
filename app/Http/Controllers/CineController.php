<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cine;
use App\Models\CinePelicula;
use App\Models\CineTarifa;
use App\Models\Pelicula;

class CineController extends Controller
{
    public function cines(){
        $cines = Cine::all();
        return view("cines", compact('cines'));
    }

    public function cine($id){
        $cine = Cine::findOrFail($id);
        $cineTarifa = CineTarifa::where("idCine", $id)->get();
        $cinePeliculas = CinePelicula::where("idCine", $id )->get();

        return view("cine");
    }
}
