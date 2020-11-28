@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>AGREGAR LOCALIDADES</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('localidades.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <form action="{{ route('localidades.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nombre localidad</span>
                </div>
                <input type="text" id="localidad" name="localidad" class="form-control" aria-label="localidad">
            </div>
            <hr>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> CONFIRMAR</button>
                </div>
            </div>
        </form>
    </div>

@endsection
