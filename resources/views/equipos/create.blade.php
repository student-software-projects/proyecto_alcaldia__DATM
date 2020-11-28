@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>AGREGAR EQUIPOS</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('equipos.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <form action="{{ route('equipos.store') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">Nombre equipo</span>
                </div>
                <input type="text" id="nombre_equipo" name="nombre_equipo" class="form-control" aria-label="localidad">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">Ruta del logo</span>
                </div>
                <input type="text" id="logo" name="logo" class="form-control" aria-label="localidad">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text frm" for="inputGroupSelect01">Localidad</label>
                </div>
                <select class="custom-select" name="localidades_id" id="localidades_id">
                    <option value="">Seleccione</option>
                    @foreach( $localidades as $localidad)
                        <option value="{{ $localidad -> id }}">{{ $localidad -> localidad }}</option>
                    @endforeach
                </select>
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
