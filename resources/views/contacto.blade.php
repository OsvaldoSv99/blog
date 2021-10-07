@extends('layout')
@section('title','Contacto')


@section('contenido')
<h1> {{ __ ('Contact')}}</h1>

<form action="{{route('messages.store')}}" method="POST">
@csrf
    <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
    {!! $errors->first('name','<small>:message</small><br>' )!!}

    <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
    {!! $errors->first('email','<small>:message</small><br>' )!!}

    <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
    {!! $errors->first('subject','<small>:message</small><br>' )!!}

    <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje..." >{{ old('content') }}</textarea><br>
    {!! $errors->first('content','<small>:message</small><br>' )!!}
    
    <button>{{__("Send")}}</button>
</form>
@endsection