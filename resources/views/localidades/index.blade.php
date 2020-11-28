@extends('master')

@section('content')

    <div class="bg-light mt-5 border border-secondary rounded p-3">
        <div class="row">
            <div class="col">
                <h3>LOCALIDADES</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('localidades.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> AGREGAR</a>
            </div>
        </div>
        <hr>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Localidad</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($localidades as $localidad)
                    <tr>
                        <td class="col-1 td-id">{{ $localidad -> id }}</td>
                        <td class="col-6">{{ $localidad -> localidad }}</td>
                        <td class="col-2">
                            <form action="{{ route('localidades.delete', $localidad -> id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                                <a href="{{ route('localidades.edit', $localidad -> id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
