@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>JUGADORES</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('jugadores.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> AGREGAR</a>
            </div>
        </div>
        <hr>
        <div class="row row-ju">
            @foreach($jugadores as $jugador)
            <div class="col-25 col-ju">
                <div class="card w-card">
                    <h5 class="card-title"> {{ $jugador -> nombre}} {{$jugador -> apellido}} </h5>
                    <hr>
                    <i class="fas fa-tshirt card-img"></i>
                    <p class="num-dor">{{ $jugador -> numero_dorsal }}</p>
                    <div class="card-body">
                        <p class="card-text border-bottom">{{ $jugador -> apodo }}</p>
                        @foreach($equipos as $equipo)
                            @if($equipo -> id == $jugador -> equipos_id)
                                <p class="card-text border-bottom"> {{ $equipo -> nombre_equipo }}</p>
                            @endif
                        @endforeach
                        <div class="opc">
                            <form action="{{ route('jugadores.delete', $jugador -> id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                                <a href="{{ route('jugadores.edit', $jugador -> id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
