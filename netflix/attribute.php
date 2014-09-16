<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-User-Attribute Information</title>
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
.STYLE10 {
	font-size: 18px;
	color: #FF0000;
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
			 <h2 class="title"><strong>Attribute Information:</strong></h2>
			 <div class="middle_back">     
			   <p class="STYLE10">The format of the data is described fully in the README files contained in the dataset tar files. <br />
			     <br />
			     MovieID: <br />
			     Arbitrarily   assigned unique integer in the range [1 .. 17770]. <br />
			     <br />
			     CustomerID: <br />
			     Arbitrarily assigned unique integer in the range [1..2649429] (with gaps). <br />
			     <br />
			     Rating: <br />
			     Number of 'stars' assigned to a movie by a customer; an   integer from 1 to 5. <br />
			     <br />
			     Title: <br />
			     English language title of the movie on   the Netflix website. <br />
			     <br />
			     YearOfRelease: <br />
			     Year a movie was released in the   range [1890..2005]. May correspond to the release of corresponding DVD, not   necessarily its theaterical release. <br />
			     <br />
			     Date: <br />
			     Timestamp of a rating in   the form YYYY-MM-DD, in the range 1998-11-01 to 2005-12-31. <br />
			     <br />
			     NetflixID: <br />
			     Integer ID of a movie as currently used in the Netflix   developer API <br />
		       <a href="http://developer.netflix.com/">[Web Link]</a></p>
			   <p class="STYLE3">&nbsp;</p>
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
			   <ol>
			     <li><a href="netflix_intro.php">An Introduction to Netflix Challenge</a></li>
			     <li><a href="dataset.php">Data Set Information</a></li>
			     <li><a href="methodology.php">Our Methodology </a></li>
			     <li><a href="results.php">What Is Included In Our Results?</a></li>
		       </ol>
			   </div>
				</div>
				<div class="bottom_small"></div>
	     </div>
		 	<div class="line1">
				<h2>Recent Posts</h2>
				 <div class="small_back">
			 <div class="back"> 
<ul>
  <li><?php include "posts.txt"?><a href="#"></a></li>
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
