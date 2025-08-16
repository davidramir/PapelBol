<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Ingreso::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validación
        $request->validate([
            'cantidad'=>'required',
            'total'=>'nullable',
            'producto_id'=>'nullable',
        ]);

        $ingreso = Ingreso::create($request->all());

        return response()->json([
            'mensaje'=> 'Ingreso creado satisfactoriamente',
            'ingreso'=>$ingreso
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $ingreso = Ingreso::find($id);

        if(!$ingreso){
            return response()->json([
                'mensaje'=>'Ingreso no encontrada'
            ], 404);
        }

        return response()->json($ingreso, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre'=>'required',
        ]);

        $ingreso = Ingreso::find($id);

        if(!$ingreso){
            return response()->json([
                'mensaje'=>'Ingreso no encontrado'
            ], 404);
        }

        $ingreso->update($request->all());

        return response()->json([
            'mensaje'=> 'Ingreso actualizada satisfactoriamente',
            'ingreso'=>$ingreso
        ],201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ingreso = Ingreso::find($id);

        if(!$ingreso){
            return response()->json([
                'mensaje'=>'Ingreso no encontrado'
            ], 404);
        }

        $ingreso->delete();

        return response()->json([
            'mensaje'=>'Ingreso eliminada satisfactoriamente'
        ],200);
    }
}