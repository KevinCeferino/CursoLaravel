@extends('layout')

@section('title', 'Contact')

@section('content')
	<h1>{{__('Contact')}}</h1>

@include('partials.session-status')

 @include('partials.validation-errors')

	<form method="POST" action="{{ route('contact.store')}}">
		@csrf
		<input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
		<input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
		<input type="text" name="subject" placeholder="Asunto ..." value="{{ old('subject') }}"><br>
		<textarea name="content" placeholder ="Mensaje...">{{ old('content') }}</textarea><br>

		<button>@lang('Enviar')</button>
	</form>
@endsection