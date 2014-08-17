<h2> Password: </h2>

<?php

	$data = file('public/common');
    $dictionary = $data;

    $r = rand(0,count($dictionary)-1);
    $passwordarray = $dictionary[$r];
    echo $passwordarray;