<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
use DB;

class ArtistaController extends Controller
{
    public function index()
    {
        $artista = Artista::select("id","Nombre", "Apellido", "Edad", "Sexo")->get();
        return view("artistas", array("artista" => $artista));
    }
    public function nuevoArtista()
    {
        return view("nuevoArtista");
    }
    public function guardarArtista(Request $request)
    {
        $artistaNuevo = new Artista;
        $artistaNuevo->Nombre = $request->input("nombre");
        $artistaNuevo->Apellido = $request->input("apellido");
        $artistaNuevo->Edad = $request->input("edad");
        $artistaNuevo->Sexo = $request->input("sexo");
        $artistaNuevo->save();
        $artista = Artista::select("id", "Nombre", "Apellido", "Edad", "Sexo")->get();
        return view("artistas", array("artista" => $artista));
    }
    public function datosActualizados(Request $request,$id)
    {
        $this->validate($request, ['Nombre'=>'required', 'Apellido'=>'required', 'Edad'=>'required', 'Sexo'=>'required']);
        Artista::find($id)->update($request->all());
        $artista = DB::table('artista')->where('id', $id)->get();
        return view("modificarArtista", array("artista" => $artista));
        
    }
    public function modificarArtista($id)
    {
        $artista = DB::table('artista')->where('id', $id)->get();
        return view("modificarArtista", array("artista" => $artista));
    }
    
}
