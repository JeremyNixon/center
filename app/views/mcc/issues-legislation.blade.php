<title>Issues And Legislation</title>
@extends('mcc/base')
@section('body')
<div class="second-level-issues">
  <div class="issues">
    <div class="issues-title">
      Current Issues
    </div>
    <div class="issues-text">

     <?php
      $collection = Problem::all();

    # loop through the Collection and access just the data
    ?> <div id="scam-link"> <?php
    foreach($collection as $problem) {
        echo  "<a href=\"/mcc/issue/" . $problem->id . "\">" . $problem->title . "</a>" . "<br>";
    }
    ?>
    <br>
    @if(Auth::check())
        <a class="add-issue" href="/mcc/issue-create">Add New Issue</a>
    @endif
    </div>
  </div>
</div>

  <div class="legislation">
    <div class="legislation-title">
      Pending Legislation
    </div>
    <div class="legislation-text">
            <?php
      $collection = Legislation::all();

    # loop through the Collection and access just the data
    ?> <div id="scam-link"> <?php
    foreach($collection as $legislation) {
        echo  "<a href=\"/mcc/legislation/" . $legislation->id . "\">" . $legislation->title . "</a>" . "<br>";
    }?>
    <br>
    @if(Auth::check())
        <a class="add-scam" href="/mcc/legislation-create">Add New Legislation</a>
    @endif
  </div>
  </div>
</div>
@stop