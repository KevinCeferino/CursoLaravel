@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
    <h1>Editar proyecto</h1>
     @include('partials.validation-errors')
     @include('partials.session-status')
    <form method="POST" action="{{ route('projects.update', $project) }}">
    	@csrf @method('PATCH')
    	<label>
    		Titulo <br>
    		<input type="text" name="title" value="{{ old('title' ,$project->title) }}">
    	</label><br>
    	<label>Descripción <br>
    		<textarea name="description">{{ old('description' , $project->description) }}</textarea>
    	</label><br>
    	<label>
    		Url <br>
    		<input type="text" name="url" value="{{ old('url' , $project->url) }}"><br>
    	</label>
    	<button>Actualizar</button>
    </form>
@endsection