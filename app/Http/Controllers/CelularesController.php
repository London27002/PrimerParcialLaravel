<?php

namespace App\Http\Controllers;

use App\Http\Requests\CelularesStoreRequest;
use App\Http\Requests\CelularesUpdateRequest;
use App\Models\Celulares;
use \Illuminate\Http\Response;

class CelularesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Celulares::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CelularesStoreRequest $request)
    {
        $celulares = Celulares::create($request ->all());
        return response()->json(['celular'=> $celulares], Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!Celulares::find($id)) {
            return response()->json(['message'=> 'Venta no encontrada'], 404);
        }
        return Celulares::find($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CelularesUpdateRequest $request, $id)
    {
        // Busca el registro por ID
        $celulares = Celulares::findOrFail($id);
    
        // Actualiza el registro con los datos validados
        $celulares->update($request->validated());
    
        // Devuelve el registro actualizado en formato JSON
        return response()->json($celulares, 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $venta = Celulares::findOrFail($id);
        $venta->delete();
        return response()->json(['message'=> 'Venta Deleted'], 200);
    }

}
