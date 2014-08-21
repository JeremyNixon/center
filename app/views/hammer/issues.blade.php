<title>Issues</title>
@extends('hammer-base')
@section('body')
<div class='left-column'>
	<div id='issue-title'>
		<p>Issues<p>
	</div>
	<div id="issue-text">
 <p id='issue-text'><?php
		$collection = Issue::all();

		# loop through the Collection and access just the data
		foreach($collection as $issue) {
		    echo  "<a href=\"/hammer/issue/" . $issue->id . "\">" . $issue->title . "</a>" . "<br><br>";
		}
?><p>
	</div>
</div>

@stop