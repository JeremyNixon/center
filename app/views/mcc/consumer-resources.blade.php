<title>Consumer Resources</title>
@extends('mcc/base')
@section('body')



  <div class="second-level">
  <div class="education">
    <div class="education-title">
      Credit History
    </div>
    <div class="education-text">

Your credit history is one of the most important consumer issues. Have you ever checked your 

credit report? Do you know your credit score? Consider finding these out. Here is some more 

information from the Massachusetts Consumers’ Coalition about the importance of credit history 

and how to check your credit report:

CREATE LINK TO SEPARATE PAGE, such as

massconsumer.org/resources/credit<br><br>

<a href='http://www.pirg.org/consumer/credit/index.htm'>Credit Reports and Credit Scores</a>, U.S.PIRG<br>
<a href='http://www.consumersunion.org/campaigns/financialprivacynow/'>Financial Privacy Now</a>, Consumers Union<br>
<a href='http://www.massconsumers.org/AngiesList/0903.html'>Know the Score</a>, Massachusetts Consumers' Coalition<br>
<a href='http://www.epic.org/privacy/fcra/'>The Fair Credit Reporting Act & the Privacy of Your Credit Report</a>, EPIC

</div>
</div>


  <div class="second-level">
  <div class="education">
    <div class="education-title">
      Credit Report
    </div>
    <div class="education-text">

To get a free copy of your credit report:<br><br>
Equifax<br>P.O. Box 740241<br>Atlanta, GA 30374<br>(800) 685-1111 <br><br>
Experian<br>P.O. Box 2104<br>Allen, TX 75013-2104<br>(888) 397-3742 <br><br>
Trans Union<br>P.O. Box 1000<br>Chester, PA 19022<br>(800) 888-4213 <br><br>


</div>
</div>

<div class="second-level">
  <div class="education">
    <div class="education-title">
      Car Smart
    </div>
    <div class="education-text">
     

The Car Smart was developed by the Massachusetts Consumers’ Coalition to provide 

consumers with information and tips about buying a car, what to do if the purchase goes sour, 

how to handle repair problems, and some helpful tips about other issues. You can find the 

pamphlet <a href='http://www.massconsumer.org/Carsmart2006/introduction.html'>here</a>.

    </div>
  </div>

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
        echo  "<a href=\"/mcc/scam/" . $scam->id . "\">" . $scam->title . "</a>" . "-" . $scam->type . "<br>";
    }
    ?>
    <br>
    <a class="add-scam" href="/mcc/scam-create">Add New Scam</a>
  </div>
  </div>
</div>
<div class="agencies">
  <div class="agencies-title">
    Consumer Agencies
  </div>
  <div class="agencies-text">
    <ol>
      </li><li><a href='www.mass.gov/ago'>Massachusetts Attorney General’s Office</a>
      </li><li><a href='www.mass.gov/consumer'>Massachusetts Office of Consumer Affairs</a>
      </li><li><a href='www.consumerfed.org'>Consumer Federation of America</a>
      </li><li><a href='www.ftc.gov'>Federal Trade Commission</a>
      </li><li><a href='http://publications.usa.gov'>Consumer Information Center</a>
      </li><li><a href='www.energystar.gov'>Energy Star Products</a>
      </li><li><a href='www.consumerworld.org'>Consumer World</a>
      </li><li><a href='www.bos.frb.org/consumer'>Federal Reserve Bank of Boston</a>
      </li><li><a href='www.consumerlaw.org'>National Consumer Law Center</a>
      </li><li><a href='www.epic.org'>Electronic Privacy Information Center</a>
      </li><li><a href='www.consumerfinance.gov'>Consumer Financial Protection Bureau</a>
      </ol>

  </div>
</div>
@stop