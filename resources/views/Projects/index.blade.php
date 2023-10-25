@extends('plantilla')
@section('title','Datos')

@section('content')
<!-- En esta parte se esta practicando el uso de Eloquent, modelos, validaciones, controladores, etc. -->
<h1>Analisis de datos</h1>
<br><br><h5>En el futuro, aqui se debera poder analizar los datos obtenidos de nuestros dispositivos, aplicando algoritmos de mineria de datos y estadistica, pero por lo mientras esta funcionando para el envio, edicion y eliminacion de registros de la base de datos</h5>
<a href="{{ route('projects.create') }}">Crear proyecto</a>
<ul>
        @forelse($projects as $port)

            <li><a href="{{ route('projects.show', $port) }}">{{ $port->created_at}}</a></li>
        @empty
        <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection