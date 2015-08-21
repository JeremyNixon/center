
@extends('/blog/blog-base')
@section('body')
<div class = 'logo_div'>
<img class='logo' src="{{URL::asset('logo.jpg')}}">
</div>

<div class ='timestamp_video'>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/jdG75RY5S84" frameborder="0" allowfullscreen></iframe>
</div>



<img class='pic' src="{{URL::asset('MainInputPageV1.4.jpg')}}">
<img class='pic' src="{{URL::asset('CalendarsPieChartvV1.2.jpg')}}">
<img class='pic' src="{{URL::asset('CalendarsTimeTotalListV1.2.jpg')}}">
<img class='pic' src="{{URL::asset('EventsForCalendarGraphV1.1.jpg')}}">


@stop