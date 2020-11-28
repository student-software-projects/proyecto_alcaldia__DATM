@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>ACTUALIZAR JUGADORES</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('jugadores.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <form action="{{ route('jugadores.update', $jugadores -> id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row row">
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <span class="input-group-text frm">Nombres</span>
                    </div>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $jugadores -> nombre }}">
                </div>
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <span class="input-group-text frm">Apellidos</span>
                    </div>
                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $jugadores -> apellido }}">
                </div>
            </div>
            <div class="form-row row">
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <span class="input-group-text frm">N° Camisa</span>
                    </div>
                    <input type="text" id="numero_dorsal" name="numero_dorsal" class="form-control" value="{{ $jugadores -> numero_dorsal }}">
                </div>
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                        <span class="input-group-text frm">Apodo</span>
                    </div>
                    <input type="text" id="apodo" name="apodo" class="form-control" value="{{ $jugadores -> apodo }}">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text frm" for="equipos_id">Equipo</label>
                </div>
                <select class="custom-select" name="equipos_id" id="equipos_id">
                    @foreach($equipos as $equipo)
                        @if($equipo -> id == $jugadores -> equipos_id)
                            <option value="{{ $equipo -> id }}">{{$equipo -> nombre_equipo}}</option>
                        @endif
                    @endforeach
                        <option value="">-------------------------------</option>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo -> id }}">{{$equipo -> nombre_equipo}}</option>
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
