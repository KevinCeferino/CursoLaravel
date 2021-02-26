@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear Proyecto</h1>
     @include('partials.validation-errors')
     @include('partials.session-status')
    <form method="POST" action="{{ route('projects.store') }}">
    	@csrf
    	<label>
    		Titulo <br>
    		<input type="text" name="title" value="{{ old('title') }}">
    	</label><br>
    	<label>Descripción <br>
    		<textarea name="description">{{ old('description') }}</textarea>
    	</label><br>
    	<label>
    		Url <br>
    		<input type="text" name="url" value="{{ old('url') }}">
    	</label>
    	<button>Guardar</button>
    </form>
@endsection