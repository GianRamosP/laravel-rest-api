<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manager = Manager::orderBy('id_manager', 'desc')->get();
        return response()->json($manager);
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
        $manager = new Manager;
        // $manager->id_usuario_comun = $request->id_usuario_comun;
        // $manager->id_admin = $request->id_admin;
        $manager->nombre_hotel = $request->nombre_hotel;
        $manager->nombre_persona = $request->nombre_persona;
        $manager->telefono = $request->telefono;
        $manager->fecha_renovacion = $request->fecha_renovacion;
        $manager->email = $request->email;
        $manager->password = $request->password;
        $manager->save();
        return response()->json($manager);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manager = Manager::findOrFail($id);
        return response()->json($manager);
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
        $manager = Manager::findOrFail($id);
        // $manager->id_usuario_comun = $request->id_usuario_comun;
        // $manager->id_admin = $request->id_admin;
        $manager->nombre_hotel = $request->nombre_hotel;
        $manager->nombre_persona = $request->nombre_persona;
        $manager->telefono = $request->telefono;
        $manager->fecha_renovacion = $request->fecha_renovacion;
        $manager->email = $request->email;
        $manager->password = $request->password;
        $manager->save();
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::findOrFail($id);
        $manager->delete();
        return response()->json($manager);
    }
}
