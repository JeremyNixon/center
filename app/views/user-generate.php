<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<?php

$faker = Faker\Factory::create();

for ($i=0; $i < $num; $i++) {
  echo $faker->name, "<br>";
}
 
