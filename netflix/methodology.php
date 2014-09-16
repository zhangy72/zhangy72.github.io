<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-Our Methodology</title>
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
					<li><a href="contact.php">Contact</a></li>
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
			 <h2 class="title">What methodology do we use?</h2>
			 <div class="STYLE3">
			   <p>In order to do prediction and comparison between movies and users, we have used the following data mining methods:</p>
			   <p>&nbsp;</p>
			   <p>1. Preprocessing</p>
			   <p>Due to the large volume of data set(480,000 users and 17,000 movies), we do random sampling to choose a 10916 users and 5392 movies. We extract the 10916*5392 user-movie paris from plain text files to form a 10916*5392 user-movie matrix. The rows are users and the colomns are movies, which we also call items. Also, the date one user rates a movie is considered for future data mining work.</p>
			   <p>&nbsp;</p>
			   <p>2. Data Mining</p>
			   <p>Generally, we use KNN algorithm to do prediciton. And we use <a title="spearman's rank correlation" href="http://en.wikipedia.org/wiki/Spearman's_rank_correlation_coefficient">Spearman's Rank Correlation</a> as our similarity metric to measure difference between vectors, such as movie vector, user vector. RMSE is used to test performance of our method. Moreover, based on our similarity calculation, we provide movie-movie, movie-user, user-movie and user-user search.</p>
			   <p>&nbsp;</p>
			   <p>3. Visualization</p>
			   <p>We use html and php to write all the website pages. Our website is located in cse server. Also we use mysql to store all the results of our project to facilitate users to do movie-movie, movie-user, user-movie and user-user search. Detailed information is located in the <a href="search.php"><strong>User-Movie Search</strong></a> page.</p>
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
             <ul>
			   <li><a href="netflix_info.php"> An Introduction to Netflix</span></a></li>
			     <li><a href="dataset.php">Dataset Information</a></li>
			     <li><a href="attribute.php">Attribute Information</a></li>
			     <li><a href="results.php">What Is Included In Our Results?</a></li>
		       </ul>
			  </div>
		  </div>
				<div class="bottom_small"></div>
      </div>
		 	<div class="line1">
				<h2>Recent Posts</h2>
				 <div class="small_back">
			 <div class="back">
			   <p><?php include "posts.txt"?></p>
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
