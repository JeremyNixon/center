@extends('hammer-base')
@section('body')
    <?php $collection = Issue::findOrFail('1'); ?>

<div class="left-column">
  <div class="col-2-3" id="issue-title">
     <?php echo $collection->title; ?>
  </div><br>
  <div class="col-2-3" id="issue-content">
  	<p> Here lies the content that users came her to see, written by the most capable players in the sport.<p>
  </div>
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
@stop