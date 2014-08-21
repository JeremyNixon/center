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
				<link rel=stylesheet type="text/css" href="{{ URL::asset('/hammer-style.css') }}">

		@show
</head>
<div id="header">
	<p id="main-title">The Hammer<p>
		<br><br>
		<ul id="navlist">
			<li><a href="/hammer/">Home</a><li>
			<li><a href="/hammer/issues">Issues</a><li>
			<li><a href="/hammer/contact">Contact</a><li>
		</ul>
	</div>
	
<body>
	@yield('body')
	
  </div>
<?php 





	?>
</body>
</html>