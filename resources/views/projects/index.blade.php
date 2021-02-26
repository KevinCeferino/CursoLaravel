@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>
    @include('partials.session-status')
    <a href="{{ route('projects.create') }}">Crear proyecto</a>
<ul>
        @forelse ($projects as $projectsElem)
             <li><a href="{{ route('projects.show', $projectsElem) }}"> {{ $projectsElem->title }}</a> </li>
             @empty
             <li>No hay proyectos para mostrar</li>
        @endforelse
    {{ $projects->links() }}
</ul>
@endsection