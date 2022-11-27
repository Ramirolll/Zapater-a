<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zapato;
use Illuminate\Http\Request;

class ZapatoController extends Controller
{
    public function index()
    {
        $zapatos = Zapato::all();
        return $zapatos;
    }

    public function store(Request $request)
    {
       $zapato = new Zapato();
       $zapato->marca = $request->marca;
       $zapato->precio = $request->precio;
       $zapato->categoria = $request->categoria;
       $zapato->imagen = $request->imagen;
       $zapato->save();
    }

    public function show($id, Request $request){
        $zapato = Zapato::find($id);
      return $zapato;
    }

    public function update($id, Request $request){
        $zapato = Zapato::find($id);
        $zapato->marca = $request->marca;
       $zapato->precio = $request->precio;
       $zapato->categoria = $request->categoria;
       $zapato->imagen = $request->imagen;
       $zapato->save();
    }

    public function destroy($id){
        $zapato = Zapato::find($id);
        $zapato->delete();
    }
}
