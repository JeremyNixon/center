<title>Create Post</title>
<style>
	body{
		margin: 0;
	}
	.form-container{
		margin: 0 auto;
		width: 32%;
		margin-top: 5%;
		padding: 20px;
		border: 1px solid #000;
		border-radius: 20px;
	}
</style>
<div class="form-container">
<h1>Add a New Post</h1>


	{{ Form::open(array('url' => 'mcc/blog-create', 'method' => 'POST')) }}


		<div class='form-title'>
			{{ Form::label('title') }}<br>
			{{ Form::text('title', $value = null, array('class' => 'title-field', 'required' => 'required')) }}
		</div><br>

		<div class='form-title'>
			{{ Form::label('Author') }}<br>
			{{ Form::text('author', $value = null, array('required' => 'required')) }}
		</div>

		<div class='form-content'>
			<br>
			{{ Form::label('content') }}<br>
			{{ Form::textarea('content', $value = null, array('class' => 'content-field', 'required' => 'required'))}}
		</div>
		<br>

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
</div>

