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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58445831-1', 'auto');
  ga('send', 'pageview');

</script>
</html>