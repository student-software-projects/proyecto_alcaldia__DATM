<?php

namespace App\Http\Controllers;

use App\Models\jugadores;
use Illuminate\Http\Request;
use App\Models\equipos;
use App\Models\localidades;

class equiposController extends Controller
{
    //
    public function index()
    {
        $equipos = equipos::all();
        $localidades = localidades::all();
        return view('equipos.index', compact('equipos', 'localidades'));
    }

    public function create()
    {
        $localidades = localidades::all();
        return view('equipos.create', compact('localidades'));
    }

    public function store(Request $request)
    {
        $equipos = equipos::create($request->all());
        return redirect()->route('equipos.index');
    }

    public function edit($id)
    {
        $equipos = equipos::find($id);
        $localidades = localidades::all();
        return view('equipos.edit', compact('equipos', 'localidades'));
    }

    public function update(Request $request, $id)
    {
        $equipos = equipos::find($id)->update($request->all());
        return redirect()->route('equipos.show', $id);
    }

    public function show($id)
    {
        $equipos = equipos::find($id);
        $localidades = localidades::all();
        return view('equipos.show', compact('equipos', 'localidades'));
    }

    public function delete($id)
    {
        $equipos = equipos::find($id)->delete();
        return redirect()->route('equipos.index');
    }

    /*public function tequipo($id)
    {
        $ide = $id;
        $equipos = equipos::find($id);
        $jugadores = jugadores::all();
        return view('equipos.tequipo', compact('equipos','jugadores', 'ide'));
    }*/
}
