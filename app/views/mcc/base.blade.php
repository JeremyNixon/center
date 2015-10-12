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
		<a href="/"><img class="logo" src="{{ URL::asset('/massachusetts.png') }}"></a>
		<div class="header-title">
			<a href="/">Massachusetts Consumer's Coalition</a>
		</div>
	</div>

	<div class="menu">
		<div class="menu-about">
			<a href="/mcc/members">Members<a/>
		</div>
		<div class="menu-information">
			<a href="/mcc/consumer-resources">Consumer<br>Resources<a/>
		</div>
		<div class="menu-information">
			<a href="/mcc/consumer-news">Consumer<br>News<a/>
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