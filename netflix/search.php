<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Mining Final Project-User-Movie Search</title>
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
.STYLE7 {color: #FF0000; font-size: 16px; font-weight: bold; }
.STYLE12 {
	color: #FF0000;
	font-size: 12px;
}
.STYLE13 {
	font-size: 16px;
	color: #000099;
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
				<ul class="STYLE5">
					<li><a href="index.php" class="STYLE13 STYLE12" >HOME</a></li>
					<li> <a href="introduction.php"class="STYLE13">INTRODUCTION</a></li>
					<li><a href="performance.php" class="STYLE13" >PERFORMANCE</a></li>
					<li><a href="contact.php" class="STYLE13" >CONTACT</a></li>
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
			 <h2 class="title">
			 		
                    <?php 
					$sSubmit=$_POST['sSubmit']; 
					$iType = $_POST['iType'];
    				$sText = $_POST['sText'];
					if(!isset($sSubmit)) echo "Welcome to User-movie search";
					else
					{
						echo "The  Search  Results  are  as  follows:"	;			
					
					} ?>
			
             </h2>
             
			 <div class="middle_back">     
				<?php $sSubmit=$_POST['sSubmit']; if (!isset($sSubmit)) {?>
                <p class="STYLE5">Here you can specify the option you want to search. There are three options: </p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5"><strong>1. movie-movie search</strong></p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5"> Input the movie ID and you will see ten movies which are predicted to have most similar user ratings. </p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE7">2. movie-user search</p>
				<p class="STYLE5">&nbsp;</p>
				<p class="STYLE5">Input the movie ID and you will get ten users who are predicted to give the highest rate for the movie.</p>
			   <p class="STYLE5">&nbsp;</p>
			   <p class="STYLE5"><strong>3. user-movie search </strong></p>
			   <p class="STYLE5">&nbsp;</p>
			   <p class="STYLE5">Input the user ID and you will get ten movies which this user is predicted to give the highest rate</p>
			   <p class="STYLE5">&nbsp;</p>
			   <p class="STYLE5"><strong>4. user-user search</strong></p>
			   <p class="STYLE5">&nbsp;</p>
			   <p class="STYLE5">Input the user ID and you will get ten user IDs who are predicted to have the same preference for movie</p>
			   <p class="STYLE5">&nbsp;</p>
               <?php } else { include "query.php"; }?>
			 </div> 
	         </div>
            
		     <div class="line1">
			   <h2 class="title">Please specify your choice and user or movie id</h2>
				 <div class="middle_back">
                   <form id="form1" method="post" action="search.php">
                     <table width="100%" border="0" cellspacing="5" cellpadding="0">
                       <tr>
                         <td width="26%"><label>
                           <input type="radio" name="iType" id="1" value='1' checked="true"/>
                         Movie-Movie</label></td>
                         <td width="25%"><label>
                           <input type="radio" name="iType" id="2" value='2'/>
                         Movie-User</label></td>
                         <td width="25%"><label>
                           <input type="radio" name="iType" id="3" value='3'/>
                           User-Movie</label></td>
                         <td width="24%"><label>
                           <input type="radio" name="iType" id="4" value='4'/>
                         User-User</label></td>
                       </tr>
                       <tr>
                         <td><label>
                           <input type="text" name="sText" size="20" />
                         </label></td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td><label>
                           <input type="submit" name="sSubmit" value="Submit" />
                           <input type="reset" name="reset" id="reset" value="Reset" />
                         </label></td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                     </table>
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
	<p>Website Design by <a href="http://www.metamorphozis.com/" title="Free Flash Templates">Free Flash Templates</a></p>
</div>
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
