<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'En Proceso')</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app" class="d-flex h-screen justify-content-between flex-column">
		<header>
	    	@include('partials/nav')
	    	@include('partials.session-status')
	    </header>
	    <main class="py-4">
	    	@yield('content')
	    </main>
	    <footer class="bg-white text-center py-3 text-black-50 shadow">
	    	{{ config('app.name') }} | Copyright @ {{ date('Y') }}
	    </footer>
    </div>
</body>
</html>