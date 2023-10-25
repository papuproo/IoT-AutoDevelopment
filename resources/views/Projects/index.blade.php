@extends('plantilla')
@section('title','Datos')

@section('content')
<h1>Analisis de datos</h1>
<a href="{{ route('projects.create') }}">Crear proyecto</a>
<ul>
        @forelse($projects as $port)

            <li><a href="{{ route('projects.show', $port) }}">{{ $port->created_at}}</a></li>
        @empty
        <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection