<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\countrycrudResource;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $paises = Pais::latest()->get();
        return view('paises.index',[
            'paises' => $paises
        ]);
    }

    public function show(Pais $paises)
    {
        return new countrycrudResource($paises);
    }

    public function update()
    {
        
        $paises = Pais::latest()->get();
        return response([
            'paises' => $paises
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required'],
            'capital' => ['required', 'unique:paises'],
            'codigo' => ['required', 'min:4', 'unique:paises'],
            'cantidadhabitantes' => ['required','numeric'],
            'area' => ['required', 'min:1']

        ]);
        $pais = new Pais;
        try{
            $pais->nombre = $request->nombre;
            $pais->capital = $request->capital;
            $pais->codigo = $request->codigo;
            $pais->cantidadhabitantes = $request->cantidadhabitantes;
            $pais->area = $request->area;
            $pais->save();
        }catch(\Exception $e){
            return response(['mensaje'=>$e->getMessage()], Response::HTTP_OK);
        }
        // return back();
        return response(['mensaje'=>'hola','pais'=>$pais], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $pais = Pais::find($id);

        if(!$pais){
            return response(['mensaje'=>"no se encontro"], Response::HTTP_NOT_FOUND);
        }

        $pais->delete();
        return response(['mensaje'=>"Se elimino"], Response::HTTP_OK);
    }
}
