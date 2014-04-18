@extends('layouts.default')

@section('content')

	<div class="pull-left">
		{{ HTML::image('http://icons.iconarchive.com/icons/binassmax/pry-frente-black-special-2/256/cross-icon.png') }}
	</div>
	<div class="pull-left" style="margin: 70px 5px 5px 40px">
		<h1>Error 404</h1>
		The requested URL ( {{ $url }} ) could not be found.
	</div>

@stop