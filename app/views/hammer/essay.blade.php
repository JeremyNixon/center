@extends('hammer-base')

	<?php $collection = Essay::findOrFail($id); ?>

@section('title')
		<title><?php echo $collection->title ?></title>
@stop
@section('body')


<div class='left-column'>	
<p id="issue-title"> <?php echo $collection->title; ?> </p>
<p> By <?php echo $collection->author; ?> <p>
<p> <?php echo $collection->content; ?><p>
</div>

<div class="right-column">
	<h3> Essays: </h3><br>
     <?php
      $issueid = $collection->issue_id;
      $collection = Essay::all();
      foreach($collection as $essay){
        if($essay->issue_id == $issueid){
          echo  "<a href=\"/hammer/essay/" . $essay->id . "\">" . $essay->title . "</a>" . "<br><br>";

        }
      }

     ?>
    </div>	
@stop