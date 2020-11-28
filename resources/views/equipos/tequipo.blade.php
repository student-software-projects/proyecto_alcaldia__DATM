@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>DETALLES EQUIPO</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('equipos.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3 img-logo">
                <img src="{{ $equipos -> logo }}" alt="" height="200px">
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <h5>{{ $equipos -> nombre_equipo }}</h5>
                </div>
                <hr>
                <div class="input-group mb-3">
                    @foreach($jugadores as $buscarJu)
                        @if($buscarJu -> equipos_id == $ide)
                            <div class="row li-ju">
                                <div class="col">
                                    <p>{{ $buscarJu -> nombre }} {{ $buscarJu -> apellido }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <hr>
    </div>

@endsection
