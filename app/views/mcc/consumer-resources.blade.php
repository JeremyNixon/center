<title>Consumer Resources</title>
@extends('mcc/base')
@section('body')
<style>
  body{
    margin-top: -4px;
  }
  .header{
    margin-top: 0px;
  }
</style>
<div class="second-level">
  <div class="education">
    <div class="education-title">
      Educational Resources
    </div>
    <div class="education-text">
     Car Smart link – explanatory blurb Other brochures or documents

    </div>
  </div>

  <div class="scam-log">
    <div class="scam-log-title">
      Scam Log
    </div>
    <div class="scam-log-text">
      
      <?php
      $collection = Scam::all();

    # loop through the Collection and access just the data
    ?> <div id="scam-link"> <?php
    foreach($collection as $scam) {
        echo  "<a href=\"/mcc/scam/" . $scam->id . "\">" . $scam->title . "</a>" . "-" . $scam->type . "<br>";
    }
    ?>
    <br>
    <a class="add-scam" href="/mcc/scam-create">Add New Scam</a>
  </div>
  </div>
</div>
<div class="agencies">
  <div class="agencies-title">
    Consumer Agencies
  </div>
  <div class="agencies-text">
   Consumer Agency Link – explanatory blurb<br>
Consumer Agency Link – explanatory blurb<br>
Consumer Agency Link – explanatory blurb
Etc.



  </div>
</div>
@stop