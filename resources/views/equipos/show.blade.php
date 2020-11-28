@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>INFORMACIÓN DE EQUIPO</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('equipos.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text frm">Nombre equipo</span>
            </div>
            <input type="text" id="nombre_equipo" name="nombre_equipo" class="form-control" value="{{ $equipos -> nombre_equipo }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text frm">Ruta del logo</span>
            </div>
            <input type="text" id="logo" name="logo" class="form-control" value="{{ $equipos -> logo }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text frm" for="inputGroupSelect01">Localidad</label>
            </div>
            @foreach($localidades as $localidad)
                @if($equipos->localidades_id == $localidad->id)
                    <input type="text" id="logo" name="logo" class="form-control" value="{{ $localidad -> localidad }}">
                @endif
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('equipos.index')}}" class="btn btn-primary"><i class="fas fa-check-circle"></i> CONFIRMAR</a>
                <a href="{{route('equipos.edit', $equipos -> id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> EDITAR</a>
            </div>
        </div>
    </div>

@endsection
