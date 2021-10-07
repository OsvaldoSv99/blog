@extends('layout')
@section('title','Galeria')
@section('contenido')
<h1>Galeria</h1>

	<a href="{{route('project.create')}}">Crear Proyecto</a>
<ul>
	@forelse($projects as $project)
		<li><a href="{{route('project.show',$project)}}"> {{$project->title}}</a></li>

		@empty
<li>
	No hay proyectos para mostrar
</li>

@endforelse
	
</ul>
{{$projects->links()}}
@endsection