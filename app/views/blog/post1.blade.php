@extends('/blog/blog-base')
<title>Ansible</title>
@section('body')
<p>Harvard's indoor league certainly had stars.</p>

Is this data accurate?

The data was collected manually over the course of the league. One reasonable way to check for accuracy is to check that features that should be equal are very close to each other. Intuitively, goals should be equal to assists should be equal to total points scored. Since total points scored wasn’t independently tracked, we should only use goals and assists to assess. 

<!-- Interesting results - -->

Distrubution of Important Variables

Why we're not using per-game measures

Strongest players by different metrics

BCS Results

Nature of the BCS formula, closedness


<img class='indoor1' src="{{URL::asset('/indoor1.png')}}">

<img class='apg' src="{{URL::asset('APG.png')}}">
<img class='gpg' src="{{URL::asset('GPG.png')}}">
<img class='tpg' src="{{URL::asset('TPG.png')}}">


@stop