<title>Consumer News</title>
@extends('mcc/base')
@section('body')


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
        echo  "<a href=\"/mcc/scam/" . $scam->id . "\">" . $scam->title . "</a>" . " - " . $scam->type . "<br>";
    }
    ?>
    <br>
    @if(Auth::check())
        <a class="add-scam" href="/mcc/scam-create">Add New Scam</a>
    @endif
  </div>
  </div>
</div>


  <div class="blog">
    <div class="blog-title">
      Member Blog/Posts
    </div>
    <div class="blog-text">
      Topical or group-specific information or event or initiative or highlight. Authors can rotate amongst members.
      <?php
      $collection = Blog::all();

    # loop through the Collection and access just the data
    ?> 
</div>
    <div id="scam-link"> <?php
    foreach($collection as $blog) {
        echo  "<a href=\"/mcc/blog/" . $blog->id . "\">" . $blog->title . "</a>" . "<br>";
    }
    ?>
  </div>
  <br>
      @if(Auth::check())
          <a class="add-scam" href="/mcc/blog-create">Add New Post</a>
      @endif
  </div>
@stop