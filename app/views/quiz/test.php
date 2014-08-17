<?php/*
	for($i=1; $i<11; $i++){
	echo "{{ Form::label('Question $i') }}br><br>";
		for($j = 1; $j < 6; $j++){
			echo"    " . "
		{{ Form::radio('q$i', value = $j) }} Option $j br><br>";
		}
	}
*/?>

<?php

	for($i = 1; $i <=10; $i++){
		echo "\$collection->q" . "$i" . " + ";
	}