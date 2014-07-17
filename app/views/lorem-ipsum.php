<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<html>
<head>
	<title>Lorem Ipsum</title>
</head>
<body>

	<h2>Here are <?php echo $num; ?> lorem-ipsum paragraphs!</h2><br>

	<?php

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($num);
	echo implode('<p>', $paragraphs);

	?>
</body>
</html>