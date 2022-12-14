@extends('tema.app')
<Style>
    body {
        background: url("https://static.vecteezy.com/system/resources/previews/004/941/860/non_2x/technology-abstract-design-space-dark-background-with-connecting-dots-and-lines-for-posters-or-web-page-template-futuristic-technology-element-illustration-eps10-vector.jpg")
    }

</Style>

@section('title', 'Estudiantes Registrados')
@section('contenido')
<h3>
    <center>
        <br>
        <font face=”Arial” COLOR="white">Estudiantes Registrados</font>

    </center>

</h3>
@livewire('estudiante-index')
@endsection
