@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('contenido')

<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>
{{-- <p>{{$project->created_at->diffForHumans()}}</p> --}}

@endsection