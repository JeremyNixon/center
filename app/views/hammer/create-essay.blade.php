@extends('hammer-base')
@section('title')
		<title>Create Essay</title>
@stop
@section('body')

<h1 class='left-column	s'>Add a New Essay</h1>


	{{ Form::open(array('url' => 'hammer/create-essay', 'method' => 'POST', 'class' => 'left-column')) }}


		
			{{ Form::label('title') }}<br>
			{{ Form::text('title', $value = null, array('required' => 'required')) }}<br>

			{{ Form::label('author') }}<br>
			{{ Form::text('author', $value = null, array( 'required' => 'required')) }}<br>

			{{ Form::label('issue id') }}<br>
			{{ Form::text('issue_id', $value = null, array( 'required' => 'required')) }}<br>

			
			{{ Form::label('content') }}<br>
			{{ Form::textarea('content', $value = null, array('id' => 'content-field', 'required' => 'required'))}}
		<br>

		{{ Form::submit('Add') }}

	{{ Form::close() }}
</div>


@stop

