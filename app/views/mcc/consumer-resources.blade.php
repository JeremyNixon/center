<title>Consumer Resources</title>
@extends('mcc/base')
@section('body')

<div class="second-level">
  <div class="education">
    <div class="education-title">
      Car Smart
    </div>
    <div class="education-text">
     

The Car Smart was developed by the Massachusetts Consumers’ Coalition to provide 

consumers with information and tips about buying a car, what to do if the purchase goes sour, 

how to handle repair problems, and some helpful tips about other issues. You can find the 

pamphlet here: http://www.massconsumer.org/Carsmart2006/introduction.html.

    </div>
  </div>

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

massconsumer.org/resources/credit

</div>
</div>


  <div class="second-level">
  <div class="education">
    <div class="education-title">
      Credit Report
    </div>
    <div class="education-text">

To get a free copy of your credit report:

Equifax

P.O. Box 740241

Atlanta, GA 30374

(800) 685-1111 

Experian

P.O. Box 2104

Allen, TX 75013-2104

(888) 397-3742 

Trans Union

P.O. Box 1000

Chester, PA 19022

(800) 888-4213 

Credit Reports and Credit Scores, U.S.PIRG

Financial Privacy Now, Consumers Union

Know the Score, Massachusetts Consumers' Coalition

The Fair Credit Reporting Act & the Privacy of Your Credit Report, EPIC

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
   1) Massachusetts Attorney General’s Office: www.mass.gov/ago 

2) Massachusetts Office of Consumer Affairs: www.mass.gov/consumer 

3) Consumer Federation of America: www.consumerfed.org 

4) Federal Trade Commission: www.ftc.gov 

5) Consumer Information Center: http://publications.usa.gov/  

6) Energy Star Products: www.energystar.gov 

7) Consumer World: www.consumerworld.org 

8) Federal Reserve Bank of Boston: www.bos.frb.org/consumer 

9) National Consumer Law Center: www.consumerlaw.org 

10) Electronic Privacy Information Center: www.epic.org 

11) Consumer Financial Protection Bureau: www.consumerfinance.gov



  </div>
</div>
@stop