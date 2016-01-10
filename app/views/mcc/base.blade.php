<!doctype html>

<html>
<head>
	@yield('title')
	@section('head')
	<link rel='stylesheet' type='text' href="{{URL::asset('/mcc-style.css')}}">
	@show
</head>
<body>
	<div class = wrapper>
		<div class="header">
			<a href="/"><img class="logo" src="{{ URL::asset('/LogoMCC.gif') }}"></a>
			<div class="header-title">
				<a href="/">Massachusetts Consumers' Coalition</a>
			</div>
			<div class="authentication">
				@if(Auth::check())
					<h4>You are in administrative mode,<br> {{Auth::user()->email;}}.</h4>
			     	<a href="/mcc/logout">Logout</a><br>
			    @else
<!-- 			    	<a href="/mcc/signup">Sign Up</a>|<a href="/mcc/login">Login</a>
 -->			    @endif
<!-- 
			    @if(Auth::check())
			        Hello {{ Auth::user()->email; }}!
			    @endif  -->
			</div>
		</div>

		<div class="menu">
			<div class="for_centering">
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
		</div>
		<div id='container'>
			@yield('body')
		</div>

		<div class="footer">
		</div>
	</div>
</body>
</html>