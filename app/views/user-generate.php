<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<html>
<head>
	<title>User Generation</title>
</head>
<body>

<h2>Here are <?php echo $num; ?> users!</h2><br>

<?php

$faker = Faker\Factory::create();

for ($i=0; $i < $num; $i++) {
  echo $faker->name, "<br>";
}
 
	?>
</body>
</html>