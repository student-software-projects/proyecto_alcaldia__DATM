<?php

namespace App\Http\Controllers;

use App\Models\localidades;
use Illuminate\Http\Request;


class localidadesController extends Controller
{
    //
    public function index()
    {
        $localidades = localidades::all();
        return view('localidades.index',compact('localidades'));
    }

    public function create()
    {
        return view('localidades.create');
    }

    public function store(Request $request)
    {
        $localidades = localidades::create($request->all());
        return redirect()->route('localidades.index');
    }

    public function edit($id)
    {
        $localidades = localidades::find($id);
        return view('localidades.edit',compact('localidades'));
    }

    public function update(Request $request, $id)
    {
        $localidades = localidades::find($id)->update($request->all());
        return redirect()->route('localidades.show', $id);
    }

    public function show($id)
    {
        $localidades = localidades::find($id);
        return view('localidades.show', compact('localidades'));
    }

    public function delete($id)
    {
        $localidades = localidades::find($id)->delete();
        return redirect()->route('localidades.index');
    }

}
