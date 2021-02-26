@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
             @include('partials.validation-errors')
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('projects.store') }}">
                <h1 class="display-4">Nuevo Proyecto</h1>
                <hr>
            	@csrf
                @include('projects._form')
            	<button class="btn btn-primary btn-block">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection