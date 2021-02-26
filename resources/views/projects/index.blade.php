@extends('layout')

@section('title', 'Portfolio')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">@lang('Portfolio')</h1>
        @auth
            <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear proyecto</a>
        @endauth
    </div>
    <hr>
    <p class="lead text-secondary"> Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p>
    <ul class="list-group">
            @forelse ($projects as $projectsElem)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex justify-content-between align-items-center text-secondary" href="{{ route('projects.show', $projectsElem) }}">
                     <span class="font-weight-bold">
                        {{ $projectsElem->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $projectsElem->created_at->format('d/m/Y') }}
                    </span>
                    </a>
                </li>
                @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos para mostrar
                </li>
            @endforelse
        {{ $projects->links() }}
    </ul>
</div>
@endsection