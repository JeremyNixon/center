<head>
	<title>Create Post</title>
<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'><style>
	body{
		text-align: center;
		font-family: georgia;
		padding-top: 100px;
	}
	#font{
		font-family: 'Permanent Marker', cursive;		
		margin: 0 auto;
		font-size: 25px;
		width: 65%;
	}

</style>
</head>
<div id="font">
<p>It is often useful for data to be generated for testing.<p> Names are a good example of data used to seed a database. Use this tool to generate any number of imaginary users.<p>
</div>	

<h1>Request Users</h1>


	{{ Form::open(array('url' => 'user-generate', 'method' => 'POST')) }}


		<div class='form-group'>
			{{ Form::label('How many users would you like?') }}<br>
			{{ Form::text('num', $value = null, array('required' => 'required')) }}
		</div>
		<br>

		{{ Form::submit('Get me some users') }}

	{{ Form::close() }}

