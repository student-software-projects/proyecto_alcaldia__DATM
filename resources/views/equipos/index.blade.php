@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>EQUIPOS</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('equipos.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> AGREGAR</a>
            </div>
        </div>
        <hr>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Logo</th>
                <th scope="col">Nombre Equipo</th>
                <th scope="col">Localidad</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($equipos as $equipo)
                <tr>
                    <td class="col-1 td-id">{{ $equipo -> id }}</td>
                    <td class="col-1 text-center"><img src="{{ $equipo -> logo }}" alt="" height="40"></td>
                    <td class="col-3">{{ $equipo -> nombre_equipo }}</td>
                    <td class="col-3">
                        @foreach($localidades as $localidad)
                            @if($equipo->localidades_id == $localidad->id)
                                {{ $localidad -> localidad }}
                            @endif
                        @endforeach
                    </td>
                    <td class="col-2">
                        <form action="{{ route('equipos.delete', $equipo -> id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <a href="{{ route('equipos.edit', $equipo -> id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
