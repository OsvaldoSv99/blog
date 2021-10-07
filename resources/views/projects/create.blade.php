@extends('layout')
@section('title','Crear Proyecto')
@section('contenido')
<h1>Crear Nuevo Proyecto</h1>
<form action="{{route('project.store')}}" method="POST">
    @csrf
<label for="">
    Titulo del Proyecto 
    <br>
    <input type="text" name="title">
</label>
<br>
<label for="">
    Descripción del Proyecto 
    <br>
    <input type="text" name="description">
</label>
<br>
<label for="">
    Descripción del Proyecto 
    <br>
    <textarea type="text" name="description" cols="30" rows="10"></textarea>
</label><br>
<label for="">
    URL del Proyecto 
    <br>
    <input type="text" name="url">
</label>
<br>
<button>Guardar</button>
</form>
@endsection