@extends('tema.app')



@section('title', 'Editar Registro')
@section('contenido')
<font face=”Arial” COLOR="white">
    <h3>
        <br><br><br><br>

        <center>Editar Registro de Estudiante: <i> {{ $estudiante->nombres }} </i></center>
    </h3>
    <form action="{{ route('estudiante.update', $estudiante) }}" method="POST">
        @method('put')
        <x-Estudiante-form-body :estudiante="$estudiante" />
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="{{ route('estudiante.destroy', $estudiante) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</font>

@endsection
