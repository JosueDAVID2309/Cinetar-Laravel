<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\CinePelicula;
use App\Models\CineTarifa;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class CinestarController extends Controller
{
    public function cines(){
        $cines = Cine::all();
        $i = 0;

        if($cines){
            $cinesTotal = [];
            foreach ($cines as $cine){
                $cineTarifa = CineTarifa::where("idCine", $cine->id)->get();
                $cinePeliculas = CinePelicula::where("idCine", $cine->id)->get();
                $cinesTotal[$i] = [
                    'cine' => $cine,
                    'tarifas'=> $cineTarifa,
                    'peliculas'=> $cinePeliculas
                ];
                $i++;
            }
            $data = [
                'success' => true,
                'data'=> $cinesTotal,
                'status' => 200
            ];

            return response()->json($data);
        }
        return response()->json(null,404);
        
    }

    public function cine($id){
        $cine = Cine::findOrFail($id);
        $cineTarifa = CineTarifa::where('idCine', $id)->get();
        $cinePelicula = CinePelicula::where('idCine', $id)->get();

        if($cine){
            $data = [
            'success' => true,
            'data' => [
                'cine' => $cine,
                'tarifas' => $cineTarifa,
                'peliculas' => $cinePelicula
                ],
            'status' => 200
            ];
            return response()->json($data);
        }

        return response()->json(null,404);
        
    }

    public function peliculas($idEstado){
        $peliculas = Pelicula::where("idEstado", $idEstado)->get();
        return response()->json($peliculas);
    }

    public function pelicula($idEstado){
        $pelicula = Pelicula::findOrFail($idEstado);
        return response()->json($pelicula);
    }
}
