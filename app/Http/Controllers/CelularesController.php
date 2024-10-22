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
    $celular = Celulares::create($request->validated());
    return response()->json(['celular' => $celular], 201);
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $celular = Celulares::with('categoria')->find($id);
    
        if (!$celular) {
            return response()->json(['message' => 'Celular no encontrado'], 404);
        }
    
        return response()->json($celular, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CelularesUpdateRequest $request, $id)
    {
        $celular = Celulares::findOrFail($id);
        $celular->update($request->validated());

        return response()->json(['celular' => $celular], Response::HTTP_OK);
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
