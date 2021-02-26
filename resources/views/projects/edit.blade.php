@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                 @include('partials.validation-errors')
                 @include('partials.session-status')
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('projects.update', $project) }}">
                    <h1>Editar proyecto</h1>
                	@csrf @method('PATCH')
                	@include('projects._form')
                	<button class="btn btn-primary btn-block">Actualizar</button>
                    <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection