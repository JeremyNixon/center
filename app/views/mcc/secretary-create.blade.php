<title>Create Secretary</title>
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
<h1>Add a New Secretary</h1>


	{{ Form::open(array('url' => 'mcc/secretary-create', 'method' => 'POST')) }}


		<div class='form-title'>
			{{ Form::label('Name') }}<br>
			{{ Form::text('name', $value = null, array('class' => 'title-field', 'required' => 'required')) }}
		</div><br>

		<div class='form-title'>
			{{ Form::label('Address') }}<br>
			{{ Form::text('address', $value = null, array('class' => 'title-field', 'required' => 'required')) }}
		</div><br>

		<div class='form-title'>
			{{ Form::label('Phone') }}<br>
			{{ Form::text('phone', $value = null, array('class' => 'title-field', 'required' => 'required')) }}
		</div><br>

		<div class='form-title'>
			{{ Form::label('Fax') }}<br>
			{{ Form::text('fax', $value = null, array('required' => 'required')) }}
		</div>
		<br>

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
</div>

