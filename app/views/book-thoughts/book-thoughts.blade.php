<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>
	
<!doctype html>

@extends('book-thoughts-base')
@section('title')
	<title>Book Thoughts</title>
@stop

@section('body')
<h1>Book Thoughts</h1>
<h5>Jeremy Nixon</h5>

<p> I have a lot of book writings that, while informal, will be quietly published here. I need to make important improvements to styling and formatting, 
	and add about 30 more books worth of content that are still in google docs.
  <p><br>

<a class="label" href="/inquiry-on-human-understanding" target="_blank">Hume. An Inquiry On Human Understanding.</a><br><br>
<a class="label" href="/the-rules" target="_blank">Fein. The Rules.</a><br><br>
<a class="label" href="/your-lifestyle-has-already-been-designed" target="_blank">Cain. Your Lifestyle Has Already Been Designed.</a><br><br>
<a class="label" href="/lean-in" target="_blank">Sandberg. Lean In.</a><br><br>
<a class="label" href="/what-every-body-is-saying" target="_blank">Navarro. What Every Body Is Saying.</a><br><br>
@stop