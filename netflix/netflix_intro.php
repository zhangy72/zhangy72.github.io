<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-User-Netflix Introduction</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.STYLE1 {
	font-size: xx-large
}
.STYLE2 {font-size: xx-large}
.STYLE4 {
	font-size: 24px;
	color: #FFFFFF;
}
.STYLE5 {
	color: #FF0000;
	font-size: 16px;
}
.STYLE6 {color: #666666}
.STYLE3 {
	color: #FF0000;
	font-size: 14px;
}
.STYLE9 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="main">

<!-- start header -->
<div id="header">

 <div id="logo">
	<h1 class="line1 STYLE1">&nbsp;</h1>
	<h2><a class="STYLE2">netflix challenge </a></h2>
	<p>&nbsp;</p>
	<p>&nbsp;	</p>
	<p>&nbsp;<span class="STYLE4">&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE6">&nbsp;By Rujira Achawanantakun, Wenbo Qiao And Yuan Zhang</span></span></p>
	</div>
  <div id="menu">
	  <ul>
	   <li><a href="index.php">Home</a></li>
	   <li><a href="introduction.php">Introduction</a></li>
	   <li><a href="search.php" class="STYLE5" >User-Movie Search</a></li>
	   <li><a href="performance.php">Performance Demo</a></li>
	   <li><a href="contact.php">Contact</a></li>   
	  </ul>
</div>
<!--Header end -->

</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start leftbar -->
	<div id="leftbar" class="sidebar">
		<div class="line1">
			<h2>Categories</h2>
			<div class="small_back">
			 <div class="back">                  
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="introduction.php">Introduction</a></li>
					<li><a href="search.php">User-Movie Search</a></li>
					<li><a href="performance.php">Performance Demo</a></li>
					<li><a href="Contact">Contact</a></li>
				</ul>
			  </div>
		  </div>
				<div class="bottom_small"></div>
      </div>
 	</div>
	<!-- end leftbar -->
	<!-- start content -->
	<div id="content">
		<div class="post">
		     <div class="line1">			 
			 <h2 class="title">What is netflix prize </h2>
			 <div class="middle_back">     
			   <p class="STYLE3">In October, 2006 Netflix released a large movie rating dataset and
			     challenged the data mining, machine learning and computer
			     science communities to develop systems that could beat the
			     accuracy of Cinematch by certain amounts.</p>
			   <p class="STYLE3">&nbsp; </p>
			   <p class="STYLE3"> Winners of the
			     various Prizes are required to document and publish their
		       approaches publicly, enabling everyone to understand and benefit
			   from the insights and techniques required to achieve the enhanced
			     levels of predictive accuracy.			     </p>
			   <p class="STYLE3">&nbsp;</p>
			   <p class="STYLE3">Netflix provided over 100 million ratings (and their dates) from
			     over 480 thousand randomly-chosen, anonymous subscribers on
			     nearly 18 thousand movie titles. The data were collected between
			     October, 1998 and December, 2005 and reflect the distribution of
			     all ratings received by Netflix during this period. The ratings are
			     on a scale from 1 to 5 (integral) stars. It withheld over 3 million
			     most-recent ratings from those same subscribers over the same set
			     of movies as a competition qualifying set.			     </p>
			   <p class="STYLE3">&nbsp;</p>
			   <p class="STYLE3">Contestants are required to make predictions for all 3 million
			     withheld ratings in the qualifying set. The RMSE is computed
			     immediately and automatically for a fixed but unknown half of
			     the qualifying set (the “quiz” subset). This value is reported to the
			     contestant and posted to the leader board, if appropriate. The
			     RMSE for the other half of the qualifying set (the “test” subset) is
			     not reported and is used by Netflix to identify potential winners of
			     a Prize.			     </p>
			   <p class="STYLE3">&nbsp;</p>
			   <p class="STYLE3">The company reported the RMSE performance of Cinematch
			     trained on the Prize dataset against the quiz subset as 0.9514, a
			     9.6% improvement over simply predicting individual movie
			     averages.			     </p>
			   <p class="STYLE3">&nbsp;</p>
			   <p class="STYLE3">The company will award a Grand Prize to the team with a system
			     that can improve on that accuracy by an additional 10%. In
			     addition, Progress Prizes will be awarded on the anniversaries of     the Prize to teams that make sufficient accuracy improvements.</p>
			   <p class="STYLE3">&nbsp;</p>
			   <p class="STYLE3"> In addition to providing the baseline Cinematch performance on
			     the quiz subset, Netflix also identified a &quot;probe&quot; subset of the
			     complete training set and the Cinematch RMSE value to permit
			     off-line comparison with systems before submission</p>
			 </div>
	         </div>
      </div>
	</div>
	<!-- end content -->
	<!-- start rightbar -->
	<div id="rightbar" class="sidebar">
		<div class="line1">
				<h2>More passages</h2>
				<div class="small_back">
			 <div class="back"> 
			   <p><a href="dataset.php">Dataset Information</a></p>
			   <p>&nbsp;</p>
			   <p><a href="attribute.php">Attribute Information</a></p>
			   <p>&nbsp;</p>
			   <p><a href="methodology.php">Our Methodology</a></p>
			   <p>&nbsp;</p>
			   <p><a href="results.php">What Is Included In Our Results?</a></p>
			 </div>
		  </div>
				<div class="bottom_small"></div>
      </div>
		 	<div class="line1">
				<h2>Recent Posts</h2>
				 <div class="small_back">
			 <div class="back"> 
<ul>
					<li><?php include "posts.txt"?></li>
			   </ul>
				</div>
				</div>
				<div class="bottom_small"></div>
	     </div>
			</div>
	<!-- end rightbar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page --> 

<div id="footer">
   <p>Copyright &copy; 2009. <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
   <p>Template Design by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a> </p>
   <p>Website Design by <a href="www.cse.msu.edu/~zhangy72"> Yuan Zhang</a></p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
