@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>CONFIRMAR ACTUALIZACIÓN</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('jugadores.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <div class="form-row row">
            <div class="input-group mb-3 col">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">Nombres</span>
                </div>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $jugadores -> nombre }}" disabled>
            </div>
            <div class="input-group mb-3 col">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">Apellidos</span>
                </div>
                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $jugadores -> apellido }}" disabled>
            </div>
        </div>
        <div class="form-row row">
            <div class="input-group mb-3 col">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">N° Camisa</span>
                </div>
                <input type="text" id="numero_dorsal" name="numero_dorsal" class="form-control" value="{{ $jugadores -> numero_dorsal }}" disabled>
            </div>
            <div class="input-group mb-3 col">
                <div class="input-group-prepend">
                    <span class="input-group-text frm">Apodo</span>
                </div>
                <input type="text" id="apodo" name="apodo" class="form-control" value="{{ $jugadores -> apodo }}" disabled>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text frm">Equipo</span>
            </div>
                @foreach($equipos as $equipo)
                    @if($equipo -> id == $jugadores -> equipos_id)
                        <input type="text" id="apodo" name="apodo" class="form-control" value="{{$equipo -> nombre_equipo}}" disabled>
                    @endif
                @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('jugadores.index')}}" class="btn btn-primary"><i class="fas fa-check-circle"></i> CONFIRMAR</a>
                <a href="{{route('jugadores.edit', $jugadores -> id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> EDITAR</a>
            </div>
        </div>
    </div>

@endsection
