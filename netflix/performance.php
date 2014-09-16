<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-Performance Demo</title>
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
			 <h2 class="title">Descrition of our algorithms</h2>
			 <p class="STYLE5"><strong>KNN:</strong><br />
Neighborhood based approaches are very popular collaborative  filtering methods. The Netflix Prize has clearly shown that these methods can  easily be beaten in terms of speed and accuracy by simple factor models. As  individual models, they do not achieve outstanding low RMSE values, but in an  ensemble of methods they work very well. In the fist year of the competition it  was shown that they yield great results on the residuals of RBMs.</p>
			 <p class="STYLE5">&nbsp;</p>
			 <p class="STYLE5"><strong>SVD:</strong><br />
			   Collaborative algorithms based on dimensionality reduction techniques  try to solve the sparse-matrix problem by reducing the problem dimensions.  Suppose that the Matrix is <em>n * m and</em> rank <em>p </em>. With the singular value  decomposition (SVD) we can factorize the matrix in the product of three  matrices, U,S,and V, such that:</p>
			 <p class="STYLE5"align="center">R=U*S*V’</p>
			 <p class="STYLE5">Where U is a n*p matrix which represents the users, V is a m*p  matrix which represents the items, and S is a diagonal matrix which contains  the p singular values of R, sorted from the greatest to the smallest. Usually  only the first l&lt;p features are considered, because they well describe the  most important information of the dataset.</p>
			 <p>&nbsp;</p>
			 <p class="STYLE5"><strong>Time-Dependence:</strong><br />
			   Time information is more and more important in collaborative  filtering based recommender system because many systems have collected rating  data for a long time and time effects in the user preference become stronger. The  basic idea is to allow an overtime changing rating average of a user. In order  to predict this time dependent average, we use a simple convolution over time. </p>
			 <p>&nbsp;</p>
			 <p>&nbsp;</p>
			 <p>&nbsp;</p>
		     </div>
		     <div class="line1">	
					<h2 class="title">their performance comparison</h2>
				 <div class="middle_back">
				   <table border="1" cellspacing="0" cellpadding="0" width="100%">
                     <tr>
                       <td><p align="center">Method</p></td>
                       <td><p align="center">KNN</p></td>
                       <td><p align="center">SVD</p></td>
                       <td><p align="center">Time-Dep</p></td>
                       <td><p align="center">SVD-Time</p></td>
                       <td><p align="center">Blending #1</p></td>
                       <td><p>Blending#2</p></td>
                     </tr>
                     <tr>
                       <td><p align="center"><strong>RMSE</strong></p></td>
                       <td><p align="center"><strong>0.9251</strong></p></td>
                       <td><p align="center"><strong>0.9128</strong></p></td>
                       <td><p align="center"><strong>0.9061</strong></p></td>
                       <td><p align="center"><strong>0.9968</strong></p></td>
                       <td><p align="center"><strong>1.0475</strong></p></td>
                       <td><p align="center"><strong>0.8932</strong></p></td>
                     </tr>
                   </table>
				   <p>&nbsp;</p>
				   <p class="STYLE5">From the results, we can see clearly that combining different algorithms result in improved RMSE, which indicate that we achieve improved precision through this method. Our future work will include how to assign different weights to different factors so that we will improve the performance of our prediction.</p>
				 </div>
				  </div>
		</div>
	</div>
	<!-- end content -->
	<!-- start rightbar -->
	<div id="rightbar" class="sidebar">
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
	<p>Website Templaten by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a></p>
	<p>Website Design by Yuan Zhang</p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
