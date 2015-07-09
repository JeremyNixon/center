@extends('/blog/blog-base')
@section('body')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>Book List</title>
  <meta content="text/html; charset=us-ascii" http-equiv="content-type" />
  <style type="text/css">
/*<![CDATA[*/
  .lst-kix_446nvvtbildd-7>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-7,lower-roman) ". "}.lst-kix_list_1-7>li{counter-increment:lst-ctn-kix_list_1-7}.lst-kix_list_1-1>li:before{content:"" counter(lst-ctn-kix_list_1-1,lower-latin) ". "}.lst-kix_list_1-1>li{counter-increment:lst-ctn-kix_list_1-1}ol.lst-kix_list_1-2.start{counter-reset:lst-ctn-kix_list_1-2 0}.lst-kix_446nvvtbildd-2>li{counter-increment:lst-ctn-kix_446nvvtbildd-2}.lst-kix_list_1-2>li:before{content:"" counter(lst-ctn-kix_list_1-2,lower-roman) ". "}.lst-kix_446nvvtbildd-2>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-2,decimal) ". "}.lst-kix_list_1-5>li:before{content:"" counter(lst-ctn-kix_list_1-5,lower-roman) ". "}.lst-kix_446nvvtbildd-0>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-0,lower-latin) ". "}.lst-kix_list_1-8>li{counter-increment:lst-ctn-kix_list_1-8}.lst-kix_446nvvtbildd-5>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-5,decimal) ". "}ol.lst-kix_list_1-7.start{counter-reset:lst-ctn-kix_list_1-7 0}.lst-kix_446nvvtbildd-1>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-1,lower-roman) ". "}ol.lst-kix_list_1-5.start{counter-reset:lst-ctn-kix_list_1-5 0}.lst-kix_list_1-4>li:before{content:"" counter(lst-ctn-kix_list_1-4,lower-latin) ". "}ol.lst-kix_list_1-1.start{counter-reset:lst-ctn-kix_list_1-1 0}ol.lst-kix_446nvvtbildd-7.start{counter-reset:lst-ctn-kix_446nvvtbildd-7 0}.lst-kix_446nvvtbildd-4>li{counter-increment:lst-ctn-kix_446nvvtbildd-4}.lst-kix_446nvvtbildd-7>li{counter-increment:lst-ctn-kix_446nvvtbildd-7}.lst-kix_446nvvtbildd-3>li{counter-increment:lst-ctn-kix_446nvvtbildd-3}ol.lst-kix_list_1-0.start{counter-reset:lst-ctn-kix_list_1-0 0}.lst-kix_list_1-5>li{counter-increment:lst-ctn-kix_list_1-5}.lst-kix_list_1-0>li:before{content:"" counter(lst-ctn-kix_list_1-0,decimal) ". "}.lst-kix_list_1-8>li:before{content:"" counter(lst-ctn-kix_list_1-8,lower-roman) ". "}.lst-kix_446nvvtbildd-6>li{counter-increment:lst-ctn-kix_446nvvtbildd-6}.lst-kix_list_1-6>li{counter-increment:lst-ctn-kix_list_1-6}ol.lst-kix_list_1-6.start{counter-reset:lst-ctn-kix_list_1-6 0}.lst-kix_446nvvtbildd-0>li{counter-increment:lst-ctn-kix_446nvvtbildd-0}ol.lst-kix_446nvvtbildd-1.start{counter-reset:lst-ctn-kix_446nvvtbildd-1 0}ol.lst-kix_446nvvtbildd-3.start{counter-reset:lst-ctn-kix_446nvvtbildd-3 0}.lst-kix_list_1-3>li:before{content:"" counter(lst-ctn-kix_list_1-3,decimal) ". "}ol.lst-kix_446nvvtbildd-6{list-style-type:none}ol.lst-kix_446nvvtbildd-7{list-style-type:none}ol.lst-kix_446nvvtbildd-8{list-style-type:none}.lst-kix_list_1-0>li{counter-increment:lst-ctn-kix_list_1-0}ol.lst-kix_446nvvtbildd-2{list-style-type:none}ol.lst-kix_446nvvtbildd-3{list-style-type:none}ol.lst-kix_446nvvtbildd-4{list-style-type:none}ol.lst-kix_446nvvtbildd-5{list-style-type:none}ol.lst-kix_446nvvtbildd-4.start{counter-reset:lst-ctn-kix_446nvvtbildd-4 0}ol.lst-kix_446nvvtbildd-0{list-style-type:none}ol.lst-kix_446nvvtbildd-1{list-style-type:none}ol.lst-kix_list_1-3.start{counter-reset:lst-ctn-kix_list_1-3 0}.lst-kix_list_1-3>li{counter-increment:lst-ctn-kix_list_1-3}.lst-kix_list_1-2>li{counter-increment:lst-ctn-kix_list_1-2}ol.lst-kix_446nvvtbildd-2.start{counter-reset:lst-ctn-kix_446nvvtbildd-2 0}ol.lst-kix_446nvvtbildd-5.start{counter-reset:lst-ctn-kix_446nvvtbildd-5 0}ol.lst-kix_446nvvtbildd-8.start{counter-reset:lst-ctn-kix_446nvvtbildd-8 0}ol.lst-kix_446nvvtbildd-0.start{counter-reset:lst-ctn-kix_446nvvtbildd-0 17}.lst-kix_446nvvtbildd-4>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-4,lower-roman) ". "}ol.lst-kix_list_1-7{list-style-type:none}ol.lst-kix_list_1-8{list-style-type:none}ol.lst-kix_446nvvtbildd-6.start{counter-reset:lst-ctn-kix_446nvvtbildd-6 0}.lst-kix_446nvvtbildd-5>li{counter-increment:lst-ctn-kix_446nvvtbildd-5}.lst-kix_list_1-6>li:before{content:"" counter(lst-ctn-kix_list_1-6,decimal) ". "}.lst-kix_446nvvtbildd-8>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-8,decimal) ". "}.lst-kix_446nvvtbildd-1>li{counter-increment:lst-ctn-kix_446nvvtbildd-1}.lst-kix_446nvvtbildd-6>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-6,lower-latin) ". "}.lst-kix_list_1-4>li{counter-increment:lst-ctn-kix_list_1-4}.lst-kix_446nvvtbildd-8>li{counter-increment:lst-ctn-kix_446nvvtbildd-8}.lst-kix_446nvvtbildd-3>li:before{content:"" counter(lst-ctn-kix_446nvvtbildd-3,lower-latin) ". "}.lst-kix_list_1-7>li:before{content:"" counter(lst-ctn-kix_list_1-7,lower-latin) ". "}ol.lst-kix_list_1-8.start{counter-reset:lst-ctn-kix_list_1-8 0}ol.lst-kix_list_1-4.start{counter-reset:lst-ctn-kix_list_1-4 0}ol.lst-kix_list_1-2{list-style-type:none}ol.lst-kix_list_1-1{list-style-type:none}ol.lst-kix_list_1-0{list-style-type:none}ol.lst-kix_list_1-6{list-style-type:none}ol.lst-kix_list_1-5{list-style-type:none}ol.lst-kix_list_1-4{list-style-type:none}ol.lst-kix_list_1-3{list-style-type:none}ol{margin:0;padding:0}.c6{padding-left:0pt;padding-top:0pt;margin-left:72pt;padding-bottom:0pt}.c7{padding-left:0pt;padding-top:0pt;margin-left:36pt;padding-bottom:0pt}.c9{color:#777777;font-size:10pt;background-color:#ffffff}.c2{widows:2;orphans:2;direction:ltr}.c13{max-width:468pt;background-color:#ffffff;padding:72pt 72pt 72pt 72pt}.c0{font-size:12pt;font-family:"Times New Roman"}.c5{margin:0;padding:0}.c4{height:11pt}.c11{text-align:left}.c12{text-align:justify}.c1{font-weight:bold}.c3{text-align:center}.c8{text-decoration:none}.c10{text-indent:36pt}.title{widows:2;padding-top:0pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#000000;font-size:21pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}.subtitle{widows:2;padding-top:0pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#666666;font-style:italic;font-size:13pt;font-family:"Trebuchet MS";padding-bottom:10pt;page-break-after:avoid}li{color:#000000;font-size:11pt;font-family:"Arial"}p{color:#000000;font-size:11pt;margin:0;font-family:"Arial"}h1{widows:2;padding-top:10pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#000000;font-size:16pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h2{widows:2;padding-top:10pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#000000;font-size:13pt;font-family:"Trebuchet MS";font-weight:bold;padding-bottom:0pt;page-break-after:avoid}h3{widows:2;padding-top:8pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#666666;font-size:12pt;font-family:"Trebuchet MS";font-weight:bold;padding-bottom:0pt;page-break-after:avoid}h4{widows:2;padding-top:8pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#666666;font-size:11pt;text-decoration:underline;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h5{widows:2;padding-top:8pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#666666;font-size:11pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}h6{widows:2;padding-top:8pt;line-height:1.1500000000000001;orphans:2;text-align:left;color:#666666;font-style:italic;font-size:11pt;font-family:"Trebuchet MS";padding-bottom:0pt;page-break-after:avoid}
  /*]]>*/
  </style>
</head>

<body class="c13">
  <p class="c2 c3"><span class="c0 c1">&nbsp;Master Book List</span></p>

  <p class="c2"><span class="c0 c1">&nbsp;</span></p>

  <p class="c2"><span class="c0 c1">Table of Contents</span></p>

  <ol class="c5 lst-kix_list_1-0 start" start="1">
    <li class="c7 c2"><span class="c0">List Description and Purpose</span></li>

    <li class="c7 c2"><span class="c0">Priority and Choice</span></li>

    <li class="c7 c2"><span class="c0">Philosophy</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Ethics</span></li>

    <li class="c6 c2"><span class="c0">Metaphysics</span></li>

    <li class="c6 c2"><span class="c0">Logic</span></li>

    <li class="c6 c2"><span class="c0">Epistemology</span></li>

    <li class="c6 c2"><span class="c0">Linguistics</span></li>

    <li class="c6 c2"><span class="c0">Religion</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-0" start="4">
    <li class="c7 c2"><span class="c0">Economics</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Behavioral Economics</span></li>

    <li class="c6 c2"><span class="c0">Finance</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-0" start="5">
    <li class="c7 c2"><span class="c0">Political Science/Government/Foreign
    Policy</span></li>

    <li class="c7 c2"><span class="c0">History</span></li>

    <li class="c7 c2"><span class="c0">Psychology/Mind, Brain, Behavior</span></li>

    <li class="c7 c2"><span class="c0">Sociology</span></li>

    <li class="c7 c2"><span class="c0">Statistics</span></li>

    <li class="c7 c2"><span class="c0">Mathematics</span></li>

    <li class="c7 c2"><span class="c0">Sciences</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Physics</span></li>

    <li class="c6 c2"><span class="c0">Biology</span></li>

    <li class="c6 c2"><span class="c0">Chemistry</span></li>

    <li class="c6 c2"><span class="c0">Environment</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-0" start="12">
    <li class="c7 c2"><span class="c0">Computer Science</span></li>

    <li class="c2 c7"><span class="c0">Literature</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Poetry</span></li>

    <li class="c6 c2"><span class="c0">Plays</span></li>

    <li class="c6 c2"><span class="c0">Comedy</span></li>

    <li class="c2 c6"><span class="c0">Non-Fiction</span></li>

    <li class="c6 c2"><span class="c0">Fiction</span></li>

    <li class="c6 c2"><span class="c0">Science Fiction</span></li>

    <li class="c6 c2"><span class="c0">Fantasy</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-0" start="14">
    <li class="c7 c2"><span class="c0">Personal Growth</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Athletics</span></li>

    <li class="c6 c2"><span class="c0">Personal Skills</span></li>

    <li class="c6 c2"><span class="c0">Relationships</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-0" start="15">
    <li class="c7 c2"><span class="c0">Business</span></li>
  </ol>

  <ol class="c5 lst-kix_list_1-1 start" start="1">
    <li class="c6 c2"><span class="c0">Startups</span></li>
  </ol>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c4 c3"></p>
  <hr style="page-break-before:always;display:none;" />

  <p class="c2 c4"></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c3"><span class="c0 c1">1. List Description and Purpose</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c10"><span class="c0">I want a comprehensive categorization of my
  idea-space. I would like it to generalize to human idea-space, but I doubt that a
  &lsquo;complete&rsquo; list &ndash; categorizing all relevant books in a field, and
  having every category of book &ndash; would be practical or efficient.</span></p>

  <p class="c2 c10"><span class="c0">This list should make my book choices more aware of
  opportunity costs and allow me to consider a wider set of options. I should also be
  able to see holes in my knowledge space.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c3"><span class="c0 c1">2. Priority and Choice</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c10"><span class="c0">Whenever possible, I&rsquo;ll read books that will
  be readily applicable to the next month of my life. I&rsquo;ll pay attention to them
  while reading because I&rsquo;m anticipating their application, and then in applying
  them I will encode more of the material into
  memory.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c3"><span class="c0 c1">3. Philosophy</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Plato. Symposium.</span></p>

  <p class="c2"><span class="c0">Russell. Sceptical Essays.</span></p>

  <p class="c2"><span class="c0">Russell. The Scientific Outlook.</span></p>

  <p class="c2"><span class="c0">Popper. The Poverty of Historicism.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Ethics</span></p>

  <p class="c2"><span class="c0">Spinoza. The Ethics.</span></p>

  <p class="c2"><span class="c0">Seneca. Letters From a Stoic.</span></p>

  <p class="c2"><span class="c0">Aurelius. Meditations.</span></p>

  <p class="c2"><span class="c0">Joyce. The Myth of Morality.</span></p>

  <p class="c2"><span class="c0">Joyce. The Evolution of Morality.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Metaphysics</span></p>

  <p class="c2"><span class="c0">Kant. Critique of Pure Reason.</span></p>

  <p class="c2"><span class="c0">Schopenhauer. The World as Will and
  Representation.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Logic</span></p>

  <p class="c2"><span class="c0">Goldfarb. Deductive Logic.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Epistemology</span></p>

  <p class="c2"><span class="c0">Hume. A Treatise of Human Nature.</span></p>

  <p class="c2"><span class="c0">Yudkowski. Less Wrong series on Epistemology.</span></p>

  <p class="c2"><span class="c0">Yudkowski. The Sequences.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Linguistics</span></p>

  <p class="c2"><span class="c0">Pinker. Words and Rules.</span></p>

  <p class="c2"><span class="c0">Pinker. Stuff of Thought. Language as a Window into
  Human Nature.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Religion</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c3"><span class="c0 c1">4. Economics</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Piketty. Capital.</span></p>

  <p class="c2"><span class="c0">Robinson. Why Nations Fail.</span></p>

  <p class="c2"><span class="c0">Mullainathan. Scarcity.</span></p>

  <p class="c2"><span class="c0">Banerjee. Poor Economics.</span></p>

  <p class="c2"><span class="c0">Smith. Wealth of Nations.</span></p>

  <p class="c2"><span class="c0">Hayek. Road to Serfdom.</span></p>

  <p class="c2"><span class="c0">Kaynes. The General Theory of Employment, Interest and
  Money.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c1">Game Theory</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span>Schelling. The Strategy of Conflict.</span></p>

  <p class="c2"><span>Axelrod. The Evolution of Cooperation.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Behavioral Economics</span></p>

  <p class="c2"><span class="c0">Ariley. Predictably Irrational.</span></p>

  <p class="c2"><span class="c0">Thaler, Sunstein. Nudge.</span></p>

  <p class="c2"><span class="c0">Khaneman. Thinking Fast and Slow.</span></p>

  <p class="c2"><span class="c0">Mackay. Extraordinary Popular Delusions and the Madness
  of Crowds.</span></p>

  <p class="c2"><span class="c0">Schiller. Irrational Exuberance.</span></p>

  <p class="c2"><span class="c0">Thaler. The Winner&rsquo;s Curse.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Finance</span></p>

  <p class="c2"><span class="c0">Michael Lewis. The Big Short. Looking at the credit and
  housing crisis, and those who bet against the market.</span></p>

  <p class="c2"><span class="c0">Lewis. Flash Boys. (High frequency trading)</span></p>

  <p class="c2"><span class="c0">Buffett. The Essays of Warren Buffett.</span></p>

  <p class="c2"><span class="c0">Bevelin. Seeking Wisdom: From Darwin to
  Munger.</span></p>

  <p class="c2"><span class="c0">Munger. Poor Charlie&rsquo;s Alminac.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">5. Political Science/Government/Foreign
  Policy</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Perkins. Confessions of an Economic Hitman.</span></p>

  <p class="c2"><span class="c0">William Blum. Killing Hope. US and CIA
  anti-intervention.</span></p>

  <p class="c2"><span class="c0">Foreign Affairs Magazine</span></p>

  <p class="c2"><span class="c0">Marx. The Communist Manifesto.</span></p>

  <p class="c2"><span class="c0">Hobbes. Leviathan.</span></p>

  <p class="c2"><span class="c0">Machiavelli. The Prince.</span></p>

  <p class="c2"><span class="c0">Elster. Explaining Social Behavior: More Knuts and Bolts
  for the Social Sciences</span></p>

  <p class="c2"><span class="c0">Power: Why some people have it - and others
  don&rsquo;t</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">6. History</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Nietzsche. The Use and Abuse of History.</span></p>

  <p class="c2"><span class="c0">Loewen. Lies my Teacher Told Me.</span></p>

  <p class="c2"><span class="c0">Zinn. A People&rsquo;s History of the United
  States.</span></p>

  <p class="c2"><span class="c0">Diamond. Guns, Germs and Steel.</span></p>

  <p class="c2"><span class="c0">Freedman. Strategy.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">7. Psychology/Mind, Body, Behavior</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Hofstadter. Godel, Escher, Bach.</span></p>

  <p class="c2"><span class="c0">Klein. Sources of Power.</span></p>

  <p class="c2"><span class="c0">Susan Cain. Quiet. The power of introverts.</span></p>

  <p class="c2"><span class="c0">Edward de Bono. Six Thinking Hats. Parallel thinking and
  structuring thinking.</span></p>

  <p class="c2"><span class="c0">Watts. Everything is Obvious. Once you know the answer,
  how common sense fails us.</span></p>

  <p class="c2"><span class="c0">Simon. In Sheep&rsquo;s Clothing. Manipulative
  People.</span></p>

  <p class="c2"><span class="c0">Ariely. The Honest Truth about Dishonesty.</span></p>

  <p class="c2"><span class="c0">Ariely. The Upside of Irrationality.</span></p>

  <p class="c2"><span class="c0">McGonigal. Willpower.</span></p>

  <p class="c2"><span class="c0">Gladwell. Blink. The Power of Thinking Without
  Thinking.</span></p>

  <p class="c2"><span class="c0">Dennett. Intuition Pumps and Other Tools for
  Thinking.</span></p>

  <p class="c2"><span class="c0">Stanovich. How to think straight about
  psychology.</span></p>

  <p class="c2"><span class="c0">Stanovich. Rationality and a Reflective Mind.</span></p>

  <p class="c2"><span class="c0">Baron. Thinking and Deciding.</span></p>

  <p class="c2"><span class="c0">Hastle. Rational Choice in an Uncertain
  World.</span></p>

  <p class="c2"><span class="c0">Partnoy. Wait: The Art and Science of Delay.</span></p>

  <p class="c2"><span class="c0">Neill. Art of Contrary Thinking.</span></p>

  <p class="c2"><span class="c0">Brafman. Sway: The Irresistible Pull of Irrational
  Behavior.</span></p>

  <p class="c2"><span class="c0">Drescher. Good and Real.</span></p>

  <p class="c2"><span class="c0">Johnson-Laird. How we Reason.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c3"><span class="c0 c1">8. Sociology</span></p>

  <p class="c2 c4 c11"></p>

  <p class="c2"><span class="c0">Bruce. A Very Short introduction to Sociology. Vincent
  recommended.</span></p>

  <p class="c2"><span class="c0">Merton. Masters of Sociological Thoughts. Vincent
  recommended.</span></p>

  <p class="c2"><span class="c0">Nesbitt. Intelligence and How to Get It. Why schools and
  cultures count.</span></p>

  <p class="c2"><span class="c0">Griffin. Black Like Me.</span></p>

  <p class="c2"><span class="c0">Levitt. Think Like a Freak.</span></p>

  <p class="c2"><span class="c0">Gladwell. The Tipping Point.</span></p>

  <p class="c2"><span class="c0">Foucault. Power/Knowledge.</span></p>

  <p class="c2"><span class="c0">Foucault. Discipline and Punish.</span></p>

  <p class="c2"><span class="c0">Wozniak. The Art of Deception.</span></p>

  <p class="c2"><span class="c0">Friedan. The Feminine Mystique.</span></p>

  <p class="c2"><span class="c0">Weber. The Protestant Ethic and the Spirit of
  Capitalism</span></p>

  <p class="c2"><span class="c0">Burt. Structural holes : the social structure of
  competition</span></p>

  <p class="c2"><span class="c0">Christakis. Connected : the surprising power of our
  social networks and how they shape our lives</span></p>

  <p class="c2"><span class="c0">Snow. A primer on social movements</span></p>

  <p class="c2"><span class="c0">Deresiewicz. Excellent Sheep: The Miseducation of the
  American Elite.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">9. Statistics</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Taleb. The Black Swan.</span></p>

  <p class="c2"><span class="c0">Taleb. Fooled by Randomness.</span></p>

  <p class="c2"><span class="c0">Taleb. Antifragile</span></p>

  <p class="c2"><span class="c0">Taleb. The Bed of Procrustes.</span></p>

  <p class="c2"><span class="c0">Silver. The Signal and the Noise</span></p>

  <p class="c2"><span class="c0">Huff. How to Lie With Statistics.</span></p>

  <p class="c2"><span class="c0">McGrayne. The Theory That Would not Die. Bayes rule
  history.</span></p>

  <p class="c2"><span class="c0">Hastie. Elements of Statistical Learning.</span></p>

  <p class="c2"><span class="c0">Mlodinow. The Drunkard&rsquo;s Walk : How Randomness
  Rules our Lives.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">10. Mathematics</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c3"><span class="c0 c1">11. Sciences</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Bryson. A Short History of Nearly Everything.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Physics</span></p>

  <p class="c2"><span class="c0">Feynman. The Feynman Lectures on Physics.</span></p>

  <p class="c2"><span class="c0">Feynman. Surely You&rsquo;re Joking, Mr.
  Feynman!</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Biology</span></p>

  <p class="c2"><span class="c0">Dawkins. The Extended Phenotype.</span></p>

  <p class="c2 c12"><span class="c0">Dawkins. The Selfish Gene.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Chemistry</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Environment</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Pop Science</span></p>

  <p class="c2"><span class="c0">Hawking. A Brief History of Time.</span></p>

  <p class="c2"><span class="c0">Hawking. The Grand Design. Examines scientific knowledge
  about the universe as an alternative to intelligent design.</span></p>

  <p class="c2"><span class="c0">Gleick. Chaos: Making a New Science.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c3"><span class="c0 c1">12. Computer Science</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0">Street. Dissecting The Hack.</span></p>

  <p class="c2"><span class="c0">O&rsquo;Reilly. Python for Data Analysis.</span></p>

  <p class="c2"><span class="c0">O&rsquo;Reilly. Machine Learning for Hackers</span></p>

  <p class="c2"><span class="c0">Rudder. Dataclysm. Who we are when no one&rsquo;s
  looking.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Machine Learning</span></p>

  <p class="c2"><span class="c0">Kuhn, Johnson. Applied Predictive Modeling.</span></p>

  <p class="c2"><span class="c0">Hastie, Tibshirani, Friedman. The Elements of
  Statistical Learning.</span></p>

  <p class="c2"><span class="c0">Murphy. Machine Learning - A Probabilistic
  Approach.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Artificial Intelligence</span></p>

  <p class="c2"><span class="c0">Bostrom. Superintelligence. AI, past, present and
  future.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Information Theory</span></p>

  <p class="c2"><span class="c0">Gleick. The Information: A History, A Theory, A
  Flood.</span></p>

  <p class="c2"><span class="c0">Information: The New Language of Science</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2 c3"><span class="c0 c1">13. Literature</span></p>

  <p class="c2 c4 c3"></p>

  <p class="c2"><span class="c0">Forester. Aspects of the Novel.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Poetry</span></p>

  <p class="c2"><span class="c0">Plath. Mad Girl&rsquo;s Love Song.</span></p>

  <p class="c2"><span class="c0">Rexroth. Vitamins and Roughage</span></p>

  <p class="c2"><span class="c0">Keats</span></p>

  <p class="c2"><span class="c0">Wordsworth</span></p>

  <p class="c2"><span class="c0">Larkin.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Plays</span></p>

  <p class="c2"><span class="c0">Shakespeare. King Lear.</span></p>

  <p class="c2"><span class="c0">Shakespeare. Julius Caesar.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Comedy</span></p>

  <p class="c2"><span class="c0">Kaufman. You can&rsquo;t take it with you.</span></p>

  <p class="c2"><span class="c0">Bloomingdale. I Should&rsquo;ve Seen it Coming when the
  Rabbit Died.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Non-fiction</span></p>

  <p class="c2"><span class="c0">Hillenbrand. Unbroken. Story of WWII survival and
  redemption.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Biography</span></p>

  <p class="c2"><span class="c0">Seifer. The Life and Times of Nikola Tesla - Biography
  of a Genius.</span></p>

  <p class="c2"><span class="c0">Issacson. Steve Jobs</span></p>

  <p class="c2"><span class="c0">Isaacson. Benjamin Franklin: An American Life</span></p>

  <p class="c2"><span class="c0">Vance. Elon Musk</span></p>

  <p class="c2"><span class="c0">Wall. Andrew Carnagie</span></p>

  <p class="c2"><span class="c0">Chernow. Titan: The Life of John D.
  Rockefeller</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Fiction</span></p>

  <p class="c2"><span class="c0">David Foster Wallace. Infinite Jest.</span></p>

  <p class="c2"><span class="c0">Quinn. Ishmael.</span></p>

  <p class="c2"><span class="c0">Marquez. 100 years of solitude</span></p>

  <p class="c2"><span class="c0">Caldwell. The Rule of Four.</span></p>

  <p class="c2"><span class="c0">Heller. Catch 22</span></p>

  <p class="c2"><span class="c0">Coelho. The Alchemist</span></p>

  <p class="c2"><span class="c0">Hesse. Siddhartha. He who has found his meaning,
  attained his goals. Buddhist.</span></p>

  <p class="c2"><span class="c0">Murukami. 1q84.</span></p>

  <p class="c2"><span class="c0">Dostoyevsky. The Brothers Karamazov</span></p>

  <p class="c2"><span class="c0">Wilde. The Picture of Dorian Gray</span></p>

  <p class="c2"><span class="c0">Saavedra. Don Quixote</span></p>

  <p class="c2"><span class="c0">Chbosky. The Perks of Being a Wallflower.</span></p>

  <p class="c2"><span class="c0">Kundera. The Unbearable Lightness of Being.</span></p>

  <p class="c2"><span class="c0">Dumas. The Three Musketteers.</span></p>

  <p class="c2"><span class="c0">Dumas. The Counte of Monte Cristo. Unabridged
  Version.</span></p>

  <p class="c2"><span class="c0">Hemmingway. The Sun Also Rises.</span></p>

  <p class="c2"><span class="c0">Patterson. Alex Cross Series.</span></p>

  <p class="c2"><span class="c0">Brooks. World War Z.</span></p>

  <p class="c2"><span class="c0">Rand. The Fountainhead.</span></p>

  <p class="c2"><span class="c0">Bradley. The Mists of Avalon. Legends from female
  perspectives.</span></p>

  <p class="c2"><span class="c0">Zusak. The Book Theif.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Science Fiction</span></p>

  <p class="c2"><span class="c0">Mitchell. Cloud Atlas. Post-apocalyptic story
  interweaving six stories.</span></p>

  <p class="c2"><span class="c0">Gibson. Neuromancer. Computer hacking.</span></p>

  <p class="c2"><span class="c0">Asimov. Foundation Series. Mathematical prediction of
  society.</span></p>

  <p class="c2"><span class="c0">Dick. Do Androids Dream of Electric Sheep?</span></p>

  <p class="c2"><span class="c0">Orson Scott Card. Ender&rsquo;s Game Series.</span></p>

  <p class="c2"><span class="c0">Anderson. Feed. Corporate power, consumerism, data and
  IT.</span></p>

  <p class="c2"><span class="c0">Yudkowsky. Harry Potter and the Methods of
  Rationality.</span></p>

  <p class="c2"><span class="c0">L&rsquo;Engle. A Wrinkle in Time.</span></p>

  <p class="c2"><span class="c0">Adams. Hitchhiker&rsquo;s Guide to the
  Galaxy.</span></p>

  <p class="c2"><span class="c0">Heinlein. The Moon is a Harsh Mistress.</span></p>

  <p class="c2"><span class="c0">Ted Chiang. Stories of Your Life and Others</span></p>

  <p class="c2"><span class="c0">Ann Leckie. Ancillary Justice, Ancillary
  Sword.</span></p>

  <p class="c2"><span class="c0">Herbert. Dune.</span></p>

  <p class="c2"><span class="c0">Sanderson. Mistborn.</span></p>

  <p class="c2"><span class="c0">Watts. Blindsight.</span></p>

  <p class="c2"><span class="c0">Egan. Permutation City.</span></p>

  <p class="c2"><span class="c0">Stephenson. The Diamond Age. Nanotechnology.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Fantasy</span></p>

  <p class="c2"><span class="c0">Martins. Game of Thrones Series</span></p>

  <p class="c2"><span class="c0">Rigney. Wheel of Time Series</span></p>

  <p class="c2"><span class="c0">White. The Once and Future King.</span></p>

  <p class="c2"><span class="c0">Patrick Rothfus.The Name of the Wind.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2"><span class="c0 c1">&nbsp;</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c3"><span class="c0 c1">14. Personal Growth</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Athletics</span></p>

  <p class="c2"><span class="c0">Goldberg. Playing Out of Your Mind.</span></p>

  <p class="c2"><span class="c0">Goldberg. Sports Slump Busting.</span></p>

  <p class="c2"><span class="c0">Jackson. Sacred Hoops.</span></p>

  <p class="c2"><span class="c0">McDougall. Born to Run.</span></p>

  <p class="c2"><span class="c0">Wooden. A lifetime of Observations and
  Reflections.</span></p>

  <p class="c2"><span class="c0">Lemov. Practice Perfect.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Personal Skills</span></p>

  <p class="c2"><span class="c0">Morgan. Warrior Mind. Martial arts strategy and
  philosophy</span></p>

  <p class="c2"><span class="c0">Cabane. The Charisma Myth.</span></p>

  <p class="c2"><span class="c0">Alder. How to Read a Book.</span></p>

  <p class="c2"><span class="c0">Greene. Mastery.</span></p>

  <p class="c2"><span class="c0">Loori. The Eight Gates of Zen. Zen Buddhism.</span></p>

  <p class="c2"><span class="c0">Suzuki. Manual of Zen Buddhism.</span></p>

  <p class="c2"><span class="c0">Pollan. The Omnivore&rsquo;s Dilemma.</span></p>

  <p class="c2"><span class="c0">Tolle. The Power of Now.</span></p>

  <p class="c2"><span class="c0">Loehr. The Power of Full Engagement</span></p>

  <p class="c2"><span class="c0">Waitzkin. The Art of Learning. Inner journey to optimal
  performance.</span></p>

  <p class="c2"><span class="c0">Ferris. 4 Hour Workweek.</span></p>

  <p class="c2"><span class="c0">Ferris. 4 Hour Body.</span></p>

  <p class="c2"><span class="c0">Didon. The Year of Magical Thinking.</span></p>

  <p class="c2"><span class="c0">Godin. Whatcha Gonna Do With That Duck? And Other
  Provocations.</span></p>

  <p class="c2"><span class="c0">Goidin. The Dip. On quitting.</span></p>

  <p class="c2"><span class="c0">Becker. Simplify. Minimalist living.</span></p>

  <p class="c2"><span class="c0">Jeffers. Feel the Fear and Do It Anyway</span></p>

  <p class="c2"><span class="c0">Ferrazzi. Never Eat Alone. Success through personal
  relationships.</span></p>

  <p class="c2"><span class="c0">Stanovich. What intelligence tests miss. Bias in the
  highly intelligent.</span></p>

  <p class="c2"><span class="c0">Heath. Decisive. How to make better decisions in life
  and work.</span></p>

  <p class="c2"><span class="c0">Bradberry. Emotional Intelligence 2.0.</span></p>

  <p class="c2"><span class="c0">Rubin. The Happiness Project.</span></p>

  <p class="c2"><span class="c0">Heath. How to Change Things When Change is
  Hard.</span></p>

  <p class="c2"><span class="c0">Dreek. It&rsquo;s Not All About Me. Building rapport
  with others.</span></p>

  <p class="c2"><span class="c0">Hoffman. The Startup of You.</span></p>

  <p class="c2"><span class="c0">Hamming. The Art of Doing Science and
  Engineering.</span></p>

  <p class="c2"><span class="c0">Cialdini. Influence (Should Reread)</span></p>

  <p class="c2"><span class="c0">Neffinger. Compelling people : The hidden qualities that
  make us influential</span></p>

  <p class="c2"><span class="c0">Zimbardo. The Lucifer Effect : Understanding how good
  people turn evil</span></p>

  <p class="c2"><span class="c0">Moldovianu. Diaminds.</span></p>

  <p class="c2"><span class="c0">Hess. Learn or Die. Best book Shane Parrish has read on
  learning.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Relationships</span></p>

  <p class="c2"><span class="c0">Delis. The Passion Trap.</span></p>

  <p class="c2"><span class="c0">Comfort. The Joy of Sex.</span></p>

  <p class="c2"><span class="c0">Ryan. Sex at Dawn.</span></p>

  <p class="c2"><span class="c0">Greene. The Art of Seduction.</span></p>

  <p class="c2"><span class="c0">Navarro. What Every Body is Saying.</span></p>

  <p class="c2"><span class="c0">Starky. Cupid&rsquo;s Code. Psychology of
  Relationships.</span></p>

  <p class="c2 c4"></p>

  <p class="c2 c3"><span class="c0 c1">15. Business</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0">Senge. The Fifth Discipline. Systems thinking,
  converting companies into learning organizations.</span></p>

  <p class="c2"><span class="c0">Ury. Positive No.</span></p>

  <p class="c2"><span class="c0">Chamine. Positive Intelligence. Achieving true potential
  for teams and individuals.</span></p>

  <p class="c2"><span class="c0">HBR&rsquo;s 10 must-reads On Strategy.</span></p>

  <p class="c2"><span class="c0">Siegel. Predictive Analytics. The power to
  predict.</span></p>

  <p class="c2"><span class="c0">Kaufman. The Personal MBA. Master the art of
  business.</span></p>

  <p class="c2"><span class="c0">Christensen. The Innovator&rsquo;s Dilemma.</span></p>

  <p class="c2"><span class="c0">Drucker. The Effective Executive. True expert on
  business management.</span></p>

  <p class="c2"><span class="c0">Fried. Rework. Rethinking simple incorrect
  assumptions.</span></p>

  <p class="c2"><span class="c0">Collins. Good to Great.</span></p>

  <p class="c2"><span class="c0">Brooks. Business Adventures.</span></p>

  <p class="c2 c4"></p>

  <p class="c2"><span class="c0 c1">Startups</span></p>

  <p class="c2"><span class="c0">Reis. The Lean Startup.</span></p>

  <p class="c2"><span class="c0">Wasserman. The Founder&rsquo;s Dilemmas.</span></p>

  <p class="c2"><span class="c0">Pink. To Sell is Human.</span></p>

  <p class="c2"><span class="c0">Bly. The Copywriter&rsquo;s Handbook. A guide to
  writing.</span></p>

  <p class="c2"><span>Thiel. Zero to One.</span></p>

  <p class="c2"><span class="c0">Christensen. The Innovator's Solution</span></p>

  <p class="c2"><span class="c0">Horowitz. The Hard Thing About Hard Things.</span></p>

  <p class="c2"><span class="c0">&nbsp;</span></p>

  <p class="c2 c4"></p>
</body>
</html>
@stop