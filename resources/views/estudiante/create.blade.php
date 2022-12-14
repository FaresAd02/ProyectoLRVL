@extends('tema.app')

<br><br><br><br><br><br><br><br><br><br><br>
@section('title', 'Crear Estudiante')
@section('contenido')

<font face=”Arial” COLOR="white">
    <h3>
        <center>Crear Estudiante</center>
    </h3>
    <form action="{{ route('estudiante.store') }}" method="POST">
        <x-Estudiante-form-body />
    </form>
</font>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection
