@extends('plantilla')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title}}</h1>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <form method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans()}}</p>
@endsection