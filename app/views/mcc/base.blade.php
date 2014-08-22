<!doctype html>

<html>
<head>
	@yield('title')
	@section('head')
	<link rel='stylesheet' type='text' href="{{URL::asset('/mcc-style.css')}}">
	@show
</head>
<body>
	<div class="header">
		<img class="logo" src="{{ URL::asset('/massachusetts.png') }}">
		<div class="header-title">
			Massachusetts Consumers Coalition
		</div>
	</div>

	<div class="menu">
		<div class="menu-about">
			<a href="/mcc/about">About Us<a/>
		</div>
		<div class="menu-information">
			<a href="/mcc/consumer-information">Consumer<br>Information<a/>
		</div>
		<div class="menu-information">
			<a href="/mcc/consumer-resources">Consumer<br>Resources<a/>
		</div>
		<div class="menu-information">
			<a href="/mcc/issues-legislation">Issues and<br>Legislation<a/>
		</div>
	</div>
	<div id='container'>
		@yield('body')
	</div>
</body>
</html>