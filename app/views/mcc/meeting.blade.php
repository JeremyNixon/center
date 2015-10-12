@extends('mcc/base')

	<?php $collection = Meeting::findOrFail($id); ?>

@section('title')
		<title>Meeting</title>
@stop
@section('body')

<div class="scam-container">

	<br><br>
	<div class='scam-content'>
	<?php echo $collection->content . '<br>'; ?>
	</div>
	<br><br>
</div>
@stop