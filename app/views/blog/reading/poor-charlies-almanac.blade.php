@extends('/blog/blog-base')
@section('body')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>Poor Charlie's Almanac</title>
  <meta content="text/html; charset=us-ascii" http-equiv="content-type" />
  <style type="text/css">
/*<![CDATA[*/
  .lst-kix_nblorb74s3vw-7>li{counter-increment:lst-ctn-kix_nblorb74s3vw-7}.lst-kix_nblorb74s3vw-4>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-4,lower-latin) ". "}ol.lst-kix_dcitw27fo7vp-0.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-0 0}.lst-kix_dcitw27fo7vp-5>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-5,lower-roman) ". "}ol.lst-kix_nblorb74s3vw-2.start{counter-reset:lst-ctn-kix_nblorb74s3vw-2 0}ol.lst-kix_dcitw27fo7vp-5.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-5 0}.lst-kix_nblorb74s3vw-0>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-0,decimal) ". "}ol.lst-kix_nblorb74s3vw-0{list-style-type:none}.lst-kix_nblorb74s3vw-3>li{counter-increment:lst-ctn-kix_nblorb74s3vw-3}ol.lst-kix_nblorb74s3vw-1{list-style-type:none}.lst-kix_dcitw27fo7vp-5>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-5}.lst-kix_nblorb74s3vw-2>li{counter-increment:lst-ctn-kix_nblorb74s3vw-2}.lst-kix_dcitw27fo7vp-4>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-4}.lst-kix_dcitw27fo7vp-3>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-3}.lst-kix_nblorb74s3vw-8>li{counter-increment:lst-ctn-kix_nblorb74s3vw-8}.lst-kix_dcitw27fo7vp-8>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-8,lower-roman) ". "}.lst-kix_dcitw27fo7vp-0>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-0,decimal) ". "}.lst-kix_dcitw27fo7vp-2>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-2,lower-roman) ". "}.lst-kix_dcitw27fo7vp-2>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-2}.lst-kix_dcitw27fo7vp-7>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-7,lower-latin) ". "}.lst-kix_nblorb74s3vw-1>li{counter-increment:lst-ctn-kix_nblorb74s3vw-1}.lst-kix_dcitw27fo7vp-7>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-7}ol.lst-kix_nblorb74s3vw-4.start{counter-reset:lst-ctn-kix_nblorb74s3vw-4 0}.lst-kix_nblorb74s3vw-3>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-3,decimal) ". "}.lst-kix_nblorb74s3vw-8>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-8,lower-roman) ". "}.lst-kix_nblorb74s3vw-5>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-5,lower-roman) ". "}.lst-kix_nblorb74s3vw-4>li{counter-increment:lst-ctn-kix_nblorb74s3vw-4}.lst-kix_nblorb74s3vw-7>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-7,lower-latin) ". "}ol.lst-kix_nblorb74s3vw-6.start{counter-reset:lst-ctn-kix_nblorb74s3vw-6 0}.lst-kix_dcitw27fo7vp-4>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-4,lower-latin) ". "}.lst-kix_nblorb74s3vw-6>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-6,decimal) ". "}.lst-kix_nblorb74s3vw-0>li{counter-increment:lst-ctn-kix_nblorb74s3vw-0}.lst-kix_dcitw27fo7vp-8>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-8}.lst-kix_dcitw27fo7vp-1>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-1,lower-latin) ". "}.lst-kix_nblorb74s3vw-5>li{counter-increment:lst-ctn-kix_nblorb74s3vw-5}ol.lst-kix_dcitw27fo7vp-1.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-1 0}.lst-kix_nblorb74s3vw-2>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-2,lower-roman) ". "}.lst-kix_dcitw27fo7vp-1>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-1}ol.lst-kix_nblorb74s3vw-7.start{counter-reset:lst-ctn-kix_nblorb74s3vw-7 0}ol.lst-kix_dcitw27fo7vp-4.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-4 0}ol.lst-kix_dcitw27fo7vp-7.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-7 0}ol.lst-kix_dcitw27fo7vp-2.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-2 0}ol.lst-kix_nblorb74s3vw-0.start{counter-reset:lst-ctn-kix_nblorb74s3vw-0 0}ol.lst-kix_nblorb74s3vw-8.start{counter-reset:lst-ctn-kix_nblorb74s3vw-8 0}ol.lst-kix_dcitw27fo7vp-4{list-style-type:none}ol.lst-kix_nblorb74s3vw-5{list-style-type:none}ol.lst-kix_dcitw27fo7vp-3{list-style-type:none}ol.lst-kix_nblorb74s3vw-4{list-style-type:none}.lst-kix_dcitw27fo7vp-3>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-3,decimal) ". "}ol.lst-kix_nblorb74s3vw-3{list-style-type:none}ol.lst-kix_dcitw27fo7vp-2{list-style-type:none}ol.lst-kix_nblorb74s3vw-2{list-style-type:none}ol.lst-kix_dcitw27fo7vp-1{list-style-type:none}ol.lst-kix_dcitw27fo7vp-8{list-style-type:none}ol.lst-kix_dcitw27fo7vp-7{list-style-type:none}ol.lst-kix_nblorb74s3vw-8{list-style-type:none}ol.lst-kix_dcitw27fo7vp-6{list-style-type:none}ol.lst-kix_nblorb74s3vw-7{list-style-type:none}ol.lst-kix_dcitw27fo7vp-5{list-style-type:none}ol.lst-kix_nblorb74s3vw-6{list-style-type:none}ol.lst-kix_dcitw27fo7vp-6.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-6 0}.lst-kix_dcitw27fo7vp-0>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-0}ol.lst-kix_dcitw27fo7vp-3.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-3 0}ol.lst-kix_nblorb74s3vw-5.start{counter-reset:lst-ctn-kix_nblorb74s3vw-5 0}ol.lst-kix_dcitw27fo7vp-8.start{counter-reset:lst-ctn-kix_dcitw27fo7vp-8 0}.lst-kix_nblorb74s3vw-6>li{counter-increment:lst-ctn-kix_nblorb74s3vw-6}.lst-kix_dcitw27fo7vp-6>li:before{content:"" counter(lst-ctn-kix_dcitw27fo7vp-6,decimal) ". "}ol.lst-kix_nblorb74s3vw-1.start{counter-reset:lst-ctn-kix_nblorb74s3vw-1 0}.lst-kix_dcitw27fo7vp-6>li{counter-increment:lst-ctn-kix_dcitw27fo7vp-6}.lst-kix_nblorb74s3vw-1>li:before{content:"" counter(lst-ctn-kix_nblorb74s3vw-1,lower-latin) ". "}ol.lst-kix_dcitw27fo7vp-0{list-style-type:none}ol.lst-kix_nblorb74s3vw-3.start{counter-reset:lst-ctn-kix_nblorb74s3vw-3 0}ol{margin:0;padding:0}.c2{padding-left:0pt;widows:2;orphans:2;direction:ltr;margin-left:36pt}.c1{widows:2;orphans:2;height:11pt;direction:ltr}.c4{widows:2;orphans:2;direction:ltr}.c5{max-width:468pt;background-color:#ffffff}.c0{margin:0;padding:0}.c3{text-align:center}.title{widows:2;padding-top:0pt;line-height:1.15;orphans:2;text-align:left;color:#000000;font-size:21pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}.subtitle{widows:2;padding-top:0pt;line-height:1.15;orphans:2;text-align:left;color:#666666;font-style:italic;font-size:13pt;font-family:"Trebuchet MS";padding-bottom:10pt;page-break-after:avoid}li{color:#000000;font-size:11pt;font-family:"Arial"}p{color:#000000;font-size:11pt;margin:0;font-family:"Arial"}h1{widows:2;padding-top:10pt;line-height:1.15;orphans:2;text-align:left;color:#000000;font-size:16pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h2{widows:2;padding-top:10pt;line-height:1.15;orphans:2;text-align:left;color:#000000;font-size:13pt;font-family:"Trebuchet MS";font-weight:bold;padding-bottom:0pt;page-break-after:avoid}h3{widows:2;padding-top:8pt;line-height:1.15;orphans:2;text-align:left;color:#666666;font-size:12pt;font-family:"Trebuchet MS";font-weight:bold;padding-bottom:0pt;page-break-after:avoid}h4{widows:2;padding-top:8pt;line-height:1.15;orphans:2;text-align:left;color:#666666;font-size:11pt;text-decoration:underline;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h5{widows:2;padding-top:8pt;line-height:1.15;orphans:2;text-align:left;color:#666666;font-size:11pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h6{widows:2;padding-top:8pt;line-height:1.15;orphans:2;text-align:left;color:#666666;font-style:italic;font-size:11pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}
  /*]]>*/
  </style>
</head>

<body class="c5">
  <p class="c4"><span>Munger is multidisciplinary. The idea that you can just train
  yourself using the best models from diverse fields is simple and works well. His
  lattice of mental models framework is just like my how to think framework, with a few
  differences. I make a split between frameworks and concepts, view the purpose as being
  to get them into system 1 (instead of using a checklist, though this is great too) and
  Munger splits ideas into their fields and enumerates them (something I should
  try).</span></p>

  <p class="c1"></p>

  <p class="c4"><span>His confidence that daily growth in wisdom is key is so validating
  to my caring about growth. I consistently go to bed smarter than when I woke up.
  I&rsquo;ve actually lost the sense that people fail to do this. I understand their
  lives intellectually, I can&rsquo;t project. The growth that I get comes from books,
  from reading online, and from social. If anything, I&rsquo;m weighted too heavily on
  growth.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>There are so many great frames and concepts (Models) I picked up to
  officially add to my own thinking model, which I can curate after I see how well things
  generalize:</span></p>

  <p class="c1"></p>

  <p class="c4 c3"><span>&nbsp;Ideas to add from Munger</span></p>

  <p class="c1 c3"></p>

  <ol class="c0 lst-kix_nblorb74s3vw-0 start" start="1">
    <li class="c2"><span>Specialization/Comparative Advantage</span></li>

    <li class="c2"><span>Law of Large Numbers / Poker-style optimal play, long term tends
    to theoretical values</span></li>

    <li class="c2"><span>Invert! Invert the question or the situation, try reversing
    everything.</span></li>

    <li class="c2"><span>Mean Regression</span></li>

    <li class="c2"><span>Backup System - All critical systems have a backup, avoid
    downside exposure</span></li>

    <li class="c2"><span>Simplicity. Make as few decisions as possible, have few
    dependencies.</span></li>

    <li class="c2"><span>Equilibrium</span></li>

    <li class="c2"><span>Critical Mass</span></li>

    <li class="c2"><span>Think at the Margin</span></li>

    <li class="c2"><span>Scarcity</span></li>

    <li class="c2"><span>Social Proof</span></li>

    <li class="c2"><span>Consistency</span></li>

    <li class="c2"><span>Reciprocation</span></li>

    <li class="c2"><span>Risk/Loss/Uncertainty Aversion</span></li>

    <li class="c2"><span>Positive Feedback</span></li>

    <li class="c2"><span>Catalyst</span></li>

    <li class="c2"><span>Compound Interest</span></li>

    <li class="c2"><span>Tight/Aggressive approach to decisions</span></li>

    <li class="c2"><span>Pareto Principle (80/20 rule)</span></li>

    <li class="c2"><span>Man with a hammer syndrome</span></li>

    <li class="c2"><span>Tragedy of the Commons</span></li>

    <li class="c2"><span>No-Brainer / Do the obvious thing</span></li>
  </ol>

  <p class="c1"></p>

  <p class="c4"><span>I can imagine building this out and letting it focus itself in
  particular places. There are so many models, knowing which ones are important and
  consistently cutting down to the ones with the most explanatory power will be
  important. The reason that munger has the best 30 second mind is that he&rsquo;s made
  great progress on making information available to him when it&rsquo;s needed -
  he&rsquo;s trained his intuition very well. Reading case studies and applying the
  frames on a habitual basis is key to getting insight into what good intuition looks
  like. And dealing with empirical evidence lets you separate the models that sound right
  from the models that are right.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>The illusion of knowledge is framed my Munger in these terms: there
  are only a few important disciplines, and they each only have a few big
  ideas.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>Relevant domains:</span></p>

  <ol class="c0 lst-kix_dcitw27fo7vp-0 start" start="1">
    <li class="c2"><span>Math</span></li>

    <li class="c2"><span>Physics</span></li>

    <li class="c2"><span>Chemistry</span></li>

    <li class="c2"><span>Biology</span></li>

    <li class="c2"><span>Engineering</span></li>

    <li class="c2"><span>Psychology</span></li>

    <li class="c2"><span>Philosophy</span></li>

    <li class="c2"><span>History</span></li>

    <li class="c2"><span>Statistics</span></li>

    <li class="c2"><span>Economics</span></li>
  </ol>

  <p class="c1"></p>

  <p class="c4"><span>The illusion of knowledge is the idea that a particular field can
  be understood without looking at all of the information - there&rsquo;s a core of
  information behind a lot of writing that is the source, and if you understand the
  source then you can get 90%+ of the value of the field to your models and
  decisions.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>This also gives us a framework for understanding failures in
  thinking. The criticism of the man with a hammer is true and scary - specialization
  without paying attention to important relevant domains is rampant. The lawyers who work
  without understanding psychology/behavioral econ do huge amounts of damage through
  naive intervention. There are complexities in the world that can&rsquo;t be grasped,
  but many of them can be, and some people have insight into dealing with uncertainty and
  complexity.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>The fact that value investors and Berkshire take very few, very
  certain bets is the same powerful frame that allows tight/aggressive poker players to
  be successful. Being extremely selective and going all in on good odds has a lot of
  empirical support. It&rsquo;s just like the focus on the core of a product in
  Rework.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>The view of the market in the short run as a voting machine is also
  true for a lot of social systems. Success isn&rsquo;t usually about empirical success -
  it&rsquo;s about social success. And that success is real! Sometimes resources and
  social proof are actually the goal for a person, and so they&rsquo;ve achieved their
  goal when that happens.</span></p>

  <p class="c1"></p>

  <p class="c4"><span>The great thing about building things is that there is real world
  change, it&rsquo;s not just in people&rsquo;s heads. SpaceX wants to actually move
  humanity to Mars - that&rsquo;s a difference that&rsquo;s not just in people&rsquo;s
  minds. A different type of success. Marketing can make people believe that a product
  improves their lives, but maybe the world is just worse off for some products existing.
  Manufacturing value in people&rsquo;s minds seems importantly different from making a
  qualitative change in the capacity of humanity.</span></p>
</body>
</html>
