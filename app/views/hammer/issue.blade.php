@extends('hammer-base')

	<?php $collection = Issue::findOrFail($id); ?>

@section('title')
		<title><?php echo $collection->title ?></title>
@stop
@section('body')

<div class='left-column'>
	<div id='issue-title'>	
	<h2><?php echo $collection->title; ?> </h2>
	</div>
	<p id='choose'>Choose a topic --><p>
</div>

<div class="right-column">
	<h3> Essays: </h3>
     <?php
     	$issueid = $collection->id;
     	$collection = Essay::all();
     	foreach($collection as $essay){
     		if($essay->issue_id == $issueid){
		    	echo  "<a href=\"/hammer/essay/" . $essay->id . "\">" . $essay->title . "</a>" . "<br><br>";

     		}
     	}

     ?>
    </div>


<br><br>

@stop