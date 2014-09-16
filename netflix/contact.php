<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-User-Contact Information</title>
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
.STYLE7 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="main">

<!-- start header -->
<div id="header">

 <div id="logo">
	<h1 class="line1 STYLE1">&nbsp;</h1>
	<h2><a class="STYLE2">netflixT challenge </a></h2>
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
			 <h2 class="title">contact information</h2>
			 <div class="middle_back">     
				<p class="STYLE5"><strong>Please contact us if you have any question:</strong></p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5">Yuan Zhang</p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5">Wenbo Qiao</p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5">Rujira Achawanantakun</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			 </div>
	         </div>
		     <div class="line1">
					 <h2 class="title">Leave a message</h2>
				     <div class="middle_back">
				       <form id="form1" method="post" action="submit.php">
				         <table width="100%" border="0" cellspacing="5" cellpadding="0">
                           <tr>
                             <td><label><span class="STYLE7">Name:</span></label></td>
                             <td><input type="text"  name="name" id="name" /></td>
                           </tr>
                           <tr>
                             <td><span class="STYLE7">Your Email </span></td>
                             <td><input type="text" name="email" id="email" /></td>
                           </tr>
                           <tr>
                             <td><span class="STYLE7">Your Message</span></td>
                             <td><textarea name="message" id="message" cols="45" rows="5"></textarea></td>
                           </tr>
                           <tr>
                             <td><label>
                               <input type="submit" name="submit" id="submit" value="Submit" />
                             </label></td>
                             <td><label>
                               <input type="reset" name="reset" id="reset" value="Reset" />
                             </label></td>
                           </tr>
                         </table>
				         <label><br />
				         </label>
				         <p>
				           <label></label>
				         </p>
				         <p>
				           <label></label>
				         </p>
				         <p>&nbsp;</p>
				       </form>
				       
				       <br />
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
				<ul><li><?php include "posts.txt"?></li>
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
	<p>Website Template by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a></p>
	<p>Website Design by Yuan Zhang</p>
	<p>&nbsp;</p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
