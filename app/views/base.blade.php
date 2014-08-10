<!doctype html>

<html>
<head>
	@yield('title')
	@section('head')
	<link rel='stylesheet' type='text' href="{{URL::asset('/style.css')}}">
	@show
</head>
<body>
	<div id="header">
		<ul id="navlist">
			<li><a href="#">Link One<a/></li>
			<li><a href="#">Link Two</a></li>
			<li><a href="#">Link Three</a></li>
			<li><a href="#">Link One</a></li>
		</ul>
	</div>
	<div id='container'>
		@yield('body')
	</div>
</body>
</html>