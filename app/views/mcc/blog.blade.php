@extends('mcc/base')

	<?php $collection = Blog::findOrFail($id); ?>

@section('title')
		<title><?php echo $collection->title ?></title>
@stop
@section('body')

<div class="scam-container">
	<div class='scam-title'>	
	<h1> <?php echo $collection->title; ?> </h2>
	</div>

	<div>	
	<h3> <?php echo $collection->author; ?> </h3>
	</div>

	<br><br>
	<div class='scam-content'>
	<?php echo $collection->content . '<br>'; ?>
	</div>
	<br><br>
</div>
@stop