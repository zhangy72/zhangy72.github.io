<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-Project Results</title>
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
	   <li><a href="search.php">User-Movie Search</a></li>
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
			 <h2 class="title">User-movie search</h2>
			 <div class="middle_back">     
				<p class="STYLE5">The function of <a href="search.php"><strong>User-Movie Search</strong></a> is based on our similarity calculation. Basically, for movie- movie search and user-user search, we calculate similarity between movie and movie as well as user and user. Then we store the most similar 10 movies( users) for each movie( user) we predict. For each movie, we extract the highest 10 scores users give and use their users as our predicted users who are most likely to love this movie. For each user, we extract the highest 10 scores he or she gives on 10 movies. These movies are the user-movie search results. </p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5">Due to the storage restriction, we only provide 1-100 movies and user as the query.</p>
				<p class="STYLE5">&nbsp;</p>
			   </div>
	         </div>
		     <div class="line1">
					 <h2 class="title">performance </h2>
				     <div class="middle_back">
				       <p class="STYLE5">This part is to show how well our algorithm works. Also we will demonstrate the relative performance of several methods we use. For details, please refer to <a href="performance.php"><strong>Performance Demo</strong></a>. </p>
				       <p><br />
			                       </p>
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
              <li><a href="methodology.php">Our Methodology</a></li>
            </ul>
          </div>
        </div>
        <div class="bottom_small"></div>
      </div>
	  <div class="line1">
        <h2>Recent Posts</h2>
	    <div class="small_back">
          <div class="back">
            <p>
              <?php include "posts.txt"?>
            </p>
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
	<p>Website Design by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a></p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
