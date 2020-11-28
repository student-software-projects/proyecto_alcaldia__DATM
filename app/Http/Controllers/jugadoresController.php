<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipos;
use App\Models\jugadores;

class jugadoresController extends Controller
{
    //

    public function index()
    {
        $jugadores = jugadores::all();
        $equipos = equipos::all();
        return view('jugadores.index', compact('jugadores','equipos'));
    }

    public function create()
    {
        $jugadores = jugadores::all();
        $equipos = equipos::all();
        return view('jugadores.create', compact('jugadores','equipos'));
    }

    public function store(Request $request)
    {
        $jugadores = jugadores::create($request->all());
        return redirect()->route('jugadores.index');
    }

    public function edit($id)
    {
        $jugadores = jugadores::find($id);
        $equipos = equipos::all();
        return view('jugadores.edit', compact('jugadores', 'equipos'));
    }

    public function update(Request $request, $id)
    {
        $jugadores = jugadores::find($id)->update($request->all());
        return redirect()->route('jugadores.show', $id);
    }

    public function show($id)
    {
        $jugadores = jugadores::find($id);
        $equipos = equipos::all();
        return view('jugadores.show', compact('jugadores', 'equipos'));
    }

    public function delete($id)
    {
        $jugadores = jugadores::find($id)->delete();
        return redirect()->route('jugadores.index');
    }

}
