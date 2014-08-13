@extends('hammer-base')
@section('title')
		<title>Create Issue</title>
@stop
@section('body')

<h1 class='left-column	s'>Add a New Issue</h1>


	{{ Form::open(array('url' => 'hammer/create-issue', 'method' => 'POST', 'class' => 'left-column')) }}


		
			{{ Form::label('title') }}<br>
			{{ Form::text('title', $value = null, array('required' => 'required')) }}<br>



		<br>

		{{ Form::submit('Add') }}

	{{ Form::close() }}
</div>


@stop

