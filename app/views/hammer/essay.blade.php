@extends('hammer-base')

	<?php $collection = Essay::findOrFail($id); ?>

@section('title')
		<title><?php echo $collection->title ?></title>
@stop
@section('body')


<div class='left-column'>	
<p id="issue-title"> <?php echo $collection->title; ?> </p>
<p> <?php echo $collection->content; ?><p>
</div>

<div class="right-column">
	<h3> Essays: </h3>
     <?php
     	$collection = Issue::findOrFail($id);
     	$issueid = $collection->id;
     	$collection = Essay::all();
     	foreach($collection as $essay){
     		if($essay->issue_id == $issueid){
		    	echo  "<a href=\"/hammer/essay/" . $essay->id . "\">" . $essay->title . "</a>" . "<br><br>";

     		}
     	}

     ?>
    </div>	
@stop