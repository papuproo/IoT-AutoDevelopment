@extends('plantilla')

@section('title', 'IoT')

@section('content')
    <h1>Internet de las cosas</h1><br><br>
    <h3>En esta parte se implementara la API de Arduino para que puedan comunicarse nuestros circuitos bastardos, pero por lo mientras es un lugar donde se experimento con el envio de correos electronicos</h3>
    <form method="POST" action="{{ route('iot') }}">
        <!-- El @csrf nos permite tener validacion necesaria para poder emplear el metodo POST -->
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
    <br>
    <script src="{{ asset('*\grafica.js') }}"></script>
    <h4>En esta parte, vamos a introducir de una vez el funcionamiento de nuestros dispositivos.</h4>
    <ul>
        <li>Práctica 6</li>
        <br>En esta práctica, debemos diseñar, desarrollar e implementar un Sistema de Control Digital con el módulo NodeMCU que sea capaz de manipular o provocar un cambio en una variable o magnitud de un sistema físico mediante un actuador.
        <br>
        <canvas id="grafica" width="400" height="400"></canvas>
    </ul>
@endsection