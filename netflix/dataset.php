<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Neflix Challenge-Dataset</title>
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
.STYLE7 {
	color: #FF0000;
	font-size: 18px;
}
-->
</style>
</head>
<body>
<div id="main">

<!-- start header -->
<div id="header">

 <div id="logo">
	<h1 class="line1 STYLE1">&nbsp;</h1>
	<h2><a class="STYLE2">NetFLIXT challenge </a></h2>
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
					<li><a href="#">Home</a></li>
					<li><a href="#">User-Movie Search</a></li>
					<li><a href="#">Urnanet non semper</a></li>
					<li><a href="#">Proin porttitor</a></li>
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
			 <h2 class="title">Dataset information</h2>
			 <div class="middle_back">     
			   <p class="STYLE7">This dataset was constructed to support participants in the   Netflix Prize. See <a href="http://www.netflixprize.com/">[Web Link]</a> for   details about the prize. <br />
			     <br />
			     There are over 480,000 customers in the   dataset, each identified by a unique integer id. <br />
			     <br />
			     The title and   release year for each movie is also provided. There are over 17,000 movies   in the dataset, each identified by a unique integer id. <br />
			     <br />
			     The dataset   contains over 100 million ratings. The ratings were collected between   October 1998 and December 2005 and reflect the distribution of all ratings   received during this period. Each rating has a customer id, a movie id, the   date of the rating, and the value of the rating. <br />
			     <br />
			     As part of the original   Netflix Prize a set of ratings was identified whose rating values were not   provided in the original dataset. The object of the Prize was to accurately   predict the ratings from this 'qualifying' set. These missing ratings are   now available in the grand_prize.tar.gz dataset file. </p>
			   <p class="STYLE7">For download, go to <a href="http://archive.ics.uci.edu/ml/datasets/Netflix+Prize"><strong>Netflix Data Set</strong></a>.</p>
			   <p class="STYLE3">&nbsp;</p>
			   </div>
	         </div>
      </div>
	</div>
	<!-- end content -->
	<!-- start rightbar -->
	<div id="rightbar" class="sidebar">
		<div class="line1">
				<h2>More Passages</h2>
				<div class="small_back">
			 <div class="back">
			   <ul>
                  <p><a href="netflix_intro.php">An Introduction to Netflix Challenge</a></p>
			   <p>&nbsp;</p>
			   <p><a href="attribute.php">Attribute Information</a></p>
			   <p>&nbsp;</p>
			   <p><a href="methodology.php">Our Methodology</a></p>
			   <p>&nbsp;</p>
			   <p><a href="results.php">What Is Included In Our Results?</a></p>
		       </ul>
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
