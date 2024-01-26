<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $habitacion = Habitacion::orderBy('id_habitacion', 'desc')->get();
        return response()->json($habitacion);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $habitacion = new Habitacion;

        $habitacion->nro_habitacion = $request->nro_habitacion;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio = $request->precio;
        $habitacion->descripcion = $request->descripcion;
        $habitacion->disponibilidad = $request->disponibilidad;

        $habitacion->save();
        return response()->json($habitacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $habitacion = Habitacion::findOrFail($id);
        return response()->json($habitacion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habitacion = Habitacion::findOrFall($id);

        $habitacion->nro_habitacion = $request->nro_habitacion;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio = $request->precio;
        $habitacion->descripcion = $request->descripcion;
        $habitacion->disponibilidad = $request->disponibilidad;

        $habitacion->save();
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $habitacion = Habitacion::findOrFall($id);
        $habitacion->delete();
        return response()->json($habitacion);
    }
}
