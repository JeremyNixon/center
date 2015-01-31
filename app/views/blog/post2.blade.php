@extends('/blog/blog-base')
@section('body')
<p>Let's take a look at some of the strongest performers in Harvard's Indoor League through the stats.
	Shouts out to the commish (Ryan ~Brawl~ Kerr) and anyone who helped keep track.
I'd like to take a look at how different statistics highlight different sets of players.
</p>

<h3>
<div class='assists_per_game'>
	<div class='accurate'>Assists Per Game</div>
	<table class='a_table'>
		<tr><td>1</td><td>Piers McNaughton</td><td>5.833333</td></tr>
		<tr><td>2</td><td>Mark Vandenberg</td><td>5.142857</td></tr>
		<tr><td>3</td><td>	George Stubbs</td><td>	 4.666667</td></tr>
		<tr><td>4</td><td>	John Stubbs</td><td>	     4.142857</td></tr>
		<tr><td>5</td><td>	Ben Scharfstein</td><td>	 4.000000</td></tr>
		<tr><td>6</td><td>	John Sturm</td><td>	     3.500000</td></tr>
		<tr><td>7</td><td>	Mike MacKenzie</td><td>	 3.375000</td></tr>
		<tr><td>8</td><td>	Sam Dinning</td><td>	 3.333333</td></tr>
		<tr><td>9</td><td>	Jake Newman</td><td>	     3.000000</td></tr>
		<tr><td>10</td><td>	Aaron Kaufman</td><td>    3.000000</td></tr>
	</table>
</div>

<div class='goals_per_game'>
	<div class='accurate'>Goals Per Game</div>
	<table class='g_table'>
		<tr><td>1</td><td>Wynn Tucker</td><td>5.400000</td></tr>
		<tr><td>2</td><td>Joey McMullen</td><td>3.285714</td></tr>
		<tr><td>3</td><td>Carson Cook</td><td>3.250000</td></tr>
		<tr><td>4</td><td>Sam Dinning</td><td>3.000000</td></tr>
		<tr><td>5</td><td>Harry Stone</td><td>3.000000</tr>
		<tr><td>6</td><td>Mark Vandenberg</td><td>2.857143</td></tr>
		<tr><td>7</td><td>William Dean</td><td>2.800000</td></tr>
		<tr><td>8</td><td>Nick Watters</td><td>2.750000</td></tr>
		<tr><td>9</td><td>Piers McNaughton</td><td>2.500000</td></tr>
		<tr><td>10</td><td>Jonah Hahn</td><td>2.500000</td></tr>
	</table>
</div>

<!-- Interesting results - -->

<!-- Distrubution of Important Variables

Why we're not using per-game measures

Strongest players by different metrics

BCS Results

Nature of the BCS formula, closedness -->


<p class='indoor1_title'>Note that this graph uses pure metrics, and not assists per game, goals per game or turns per game. </p>

<img class='indoor1' src="{{URL::asset('/indoor1.png')}}">

 <h2 class='major_heading'> Distribution of the Major Statistics </h2>
<p>The major statistics - Assists, Goals, and Turns - are all heavily skewed right. A few players account for a large amount of the volume of each statistic.</p>

<div class='pictures'>
	<img class='apg' src="{{URL::asset('APG.png')}}">
	<img class='gpg' src="{{URL::asset('GPG.png')}}">
	<img class='tpg' src="{{URL::asset('TPG.png')}}">
</div>

<div class='atr'>
	<div class='accurate'>Assist Turn Ratio</div>
	<table class='g_table'>
		<tr><td>1</td><td>Wynn Tucker</td><td>5.400000</td></tr>
		<tr><td>2</td><td>Joey McMullen</td><td>3.285714</td></tr>
		<tr><td>3</td><td>Carson Cook</td><td>3.250000</td></tr>
		<tr><td>4</td><td>Sam Dinning</td><td>3.000000</td></tr>
		<tr><td>5</td><td>Harry Stone</td><td>3.000000</tr>
		<tr><td>6</td><td>Mark Vandenberg</td><td>2.857143</td></tr>
		<tr><td>7</td><td>William Dean</td><td>2.800000</td></tr>
		<tr><td>8</td><td>Nick Watters</td><td>2.750000</td></tr>
		<tr><td>9</td><td>Piers McNaughton</td><td>2.500000</td></tr>
		<tr><td>10</td><td>Jonah Hahn</td><td>2.500000</td></tr>
	</table>
</div>
<div class='atr_container'>
<h3 class='atr_title'>The Assist to Turn Ratio</h3>

<p>This seems to have been a asurprisingly robust simple measure of player quality.
</p>
</div>
<div class='accuracy_container'>
<h3 class='accurate1'>Is this data accurate?
</h3>
<p>The data was collected manually over the course of the league. One reasonable way to check for accuracy is to check that features that should be equal are very close to each other. 
</p>
Total Goal Count: 609<br>	
Total Assist Count: 604
</p>Intuitively, goals should be equal to assists should be equal to total points scored. 
Since total points scored wasn’t independently tracked, we should only use goals and assists to assess. 
These counts are quite close, indicating that we can generally trust the stat-trackers.
 </p>
</div>



@stop