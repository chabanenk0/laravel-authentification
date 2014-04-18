@extends('layouts.default')

@section('content')

	<h1>Register</h1>

	{{ Form::open(array('route' => 'sessions.store', 'class')) }}

		<div class="form-group">
			{{ Form::label('email', 'Email:') . Form::text('email', null, array('class' => 'form-control')) }}
			{{ $errors->first('email') }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password:') . Form::password('password', array('class' => 'form-control', 'value' => Input::old('password'))) }}
			{{ $errors->first('password') }}
		</div>
		<div class="form-group">
			{{ Form::submit('Give it a go', array('class' => 'btn btn-default')) }}
		</div>


	{{ Form::token() . Form::close() }}

@stop