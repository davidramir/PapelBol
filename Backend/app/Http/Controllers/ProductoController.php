<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Validación 
         $request->validate([
            'nombre_producto'=>'required',
            'descripcion'=>'nullable',
            'precio'=>'nullable',
            'stock'=>'nullable',
        ]);

        $producto = Producto::create($request->all());

        return response()->json([
            'mensaje'=> 'Producto creado satisfactoriamente',
            'producto'=>$producto
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Producto::find($id);

        if(!$producto){
            return response()->json([
                'mensaje'=>'Producto no encontrado'
            ], 404);
        }

        return response()->json($producto, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre_producto'=>'required',
            'descripcion'=>'nullable',
            'precio'=>'nullable',
            'stock'=>'nullable',
        ]);

        $producto = Producto::find($id);

        if(!$producto){
            return response()->json([
                'mensaje'=>'Producto no encontrado'
            ], 404);
        }

        $producto->update($request->all());

        return response()->json([
            'mensaje'=> 'Producto actualizado satisfactoriamente',
            'producto'=>$producto
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::find($id);

        if(!$producto){
            return response()->json([
                'mensaje'=>'Producto no encontrado'
            ], 404);
        }

        $producto->delete();

        return response()->json([
            'mensaje'=>'Producto eliminado satisfactoriamente'
        ],200);
    }
}