@extends('plantilla')
@section('title','Crear Proyectos')

@section('content')
<h1>Editar proyecto</h1>

@include('errors.validation-errors')

<form method="POST" action=" {{route('projects.update', $project)}}">
    @csrf @method('PATCH')
    
    <!-- Aqui se incluye el archivo _form para aniadir el formulario que se repite en edicio y creacion -->
    @include('projects._form')

    <button>Actualizar</button>
</form>
@endsection