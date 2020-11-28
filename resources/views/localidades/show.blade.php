@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>DATOS ACTUALIZADOS</h3>
            </div>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Nombre localidad</span>
            </div>
            <input type="text" name="localidad" class="form-control" value="{{ $localidades -> localidad }}">
        </div>
        <hr>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('localidades.index')}}" class="btn btn-primary"><i class="fas fa-check-circle"></i> CONFIRMAR</a>
                <a href="{{route('localidades.edit', $localidades -> id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> EDITAR</a>
            </div>
        </div>
    </div>

@endsection
