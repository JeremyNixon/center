<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');

?>
<!doctype html>
<html>

<head>
		@yield('title')
		@section('head')
				<link rel=stylesheet type="text/css" href="{{ URL::asset('/quiz-style.css') }}">

		@show
</head>
<div id="header">
		<ul id="navlist">
			<li><a href="/quiz/">Home</a><li>
			<li><a href="/quiz/take">Take the quiz!</a><li>
			<li><a href="/quiz/possibilities">Possibilities</a><li>
		</ul>
</div>
	
<body>
		@yield('body')
<?php 





	?>
</body>
</html>