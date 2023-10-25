@extends('plantilla')

@section('title', 'IoT')

@section('content')
    <h1>Internet de las cosas</h1>
    <form method="POST" action="{{ route('iot') }}">
        @csrf 
        <input name="name" placeholder="Nombre:" value="{{ old('name') }}">
        { !! $errors->first('name','<small>:message</small><br>') !! }

        <input type="email" name="email" placeholder="Email:" value="{{ old('email') }}">
        { !! $errors->first('email','<small>:message</small><br>') !! }
        
        <input name="subject" placeholder="Asunto" value="{{ old('subject') }}">
        { !! $errors->first('subject','<small>:message</small><br>') !! }
        
        <textarea name="content" placeholder="Mensaje:">{{ old('content') }}</textarea>
        { !! $errors->first('content','<small>:message</small><br>') !! }
        
        <button>Enviar</button>
    </form>
@endsection