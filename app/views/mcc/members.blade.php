<title>About Us</title>
@extends('mcc/base')
@section('body')
<div class="about-container">
	<div class="history">
		<div class="history-title">
			Upcoming Meetings
		</div>
		<div class="history-text">
	<?php
      $collection = Meeting::all();

    # loop through the Collection and access just the data
    ?> <div id="scam-link"> <?php
    foreach($collection as $meeting) {
        echo $meeting->content;
    }
    ?>
    <br>
    <a class="add-scam" href="/mcc/meeting-create">Add New Meeting</a>



<!-- Wednesday, April 15, 12:00 p.m., at 100 Cambridge Street, Boston (the Saltonstall Building)
 -->		</div>
	</div>


	<div class="member-organizations">
		<div class="member-organizations-title">
			Member Organizations
		</div>
		<div class="member-organizations-text">
			<ul>
			<li><a href='www.cambridgema.gov/consumercouncil.aspx '>Cambridge Consumers’ Council www.cambridgema.gov/consumercouncil.aspx</a>
			</li><li><a href='www.consumercouncil.com'>Consumer Assistance Council, Inc.</a>
			</li><li><a href='www.consumermetrowest.org '>Consumer Assistance Office - Metro West, Inc. </a>
			</li><li><a href='http://www.consumersempowered.org/ '>Consumers Empowered, Inc.</a>
			</li><li><a href='www.consumerworld.org '>Consumer World </a>
			</li><li>Greater Lawrence Community Action Council, Inc.  
			</li><li>Massachusetts Consumers’ Council, Inc. 
			</li><li><a href='www.masspirg.org'>MASSPIRG</a>
			</li><li>Newton-Brookline Consumer Office
			</li><li><a href='www.mass.gov/ago'>Office of the Attorney General</a>
			</li><li><a href='www.cityofboston.gov/consumeraffairs'>Office of Consumer Affairs – Boston</a>
			</li><li>Revere Consumer Affairs
			</li><li>South Shore Community Action Council
			</li><li><a href='www.cambridgenahs.org/foreclosure.php'>Cambridge Neighborhood Apartment Housing Services</a>
			</li><li><a href='www.mass.gov/dtc'>Department of Telecommunications and Cable</a>
			</li><li><a href='www.masmallclaims.org'>Small Claims Advisory Service</a>
			<?php
      $collection = Member::all();

    # loop through the Collection and access just the data
    ?> <div> <?php
    foreach($collection as $member) {
        echo $member->name . '<br>';
    }
    ?></div>
       <a class="add-scam" href="/mcc/member-create">Add New Member</a>
		</ul>
  

		</div>
	</div>

		<div class="membership">
		<div class="membership-title">
			Coalition Officers
		</div>
		<div class="membership-text">
			

Chair: Cindy Matloff

<br>Vice Chair: Julian Smith

<br>Secretary: Jeanne Foy

<br>Treasurer: Laura Nichols
<?php
      $collection = Officer::all();

    # loop through the Collection and access just the data
    ?> <div> <?php
    foreach($collection as $officer) {
        echo $officer->title . ': ' . $officer->name . '<br>';
    }
    ?></div>
       <a class="add-scam" href="/mcc/officer-create">Add New Officer</a>

		</div>
	</div>

		<div class="membership">
		<div class="membership-title">
			How to Become A Member
		</div>
		<div class="membership-text">
			Contact the Secretary of the Coalition:<br><br>

Jeanne Foy, Secretary

<br>Consumer Action Center

<br>182 Green Street

<br>Weymouth, MA 02191

<br><br>Phone:<br>781-335-0280

<br><br>Fax:<br>781-340-3391
		</div>
	</div>

</div>
@stop