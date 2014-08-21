@extends('hammer-base')
@section('title')
		<title>Create Issue</title>
@stop
@section('body')

<h1>Add a New Issue</h1>
<p>Pick up advice from the community</p>


	{{ Form::open(array('url' => 'hammer/create-issue', 'method' => 'POST', 'class' => 'left-column')) }}


		
			{{ Form::label('title') }}<br>
			{{ Form::text('title', $value = null, array('required' => 'required')) }}<br>



		<br>

		{{ Form::submit('Add') }}

	{{ Form::close() }}
</div>


@stop

