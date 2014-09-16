<?php
	require_once('db_login.php');
	$id = mysql_connect($db_host, $db_username, $db_password);
	mysql_select_db($db_database, $id);

    $iType = $_POST['iType'];
    $sText = $_POST['sText'];
	switch ($iType)
    {
    case 1:
	    $query = "select * from movie2movie where query='$sText'";
        break;
    case 2:
	    $query = "select * from movie2user where query='$sText'";
        break;
    case 3:
	    $query = "select * from user2movie where query='$sText'";
        break;
	case 4:
		$query="select * from user2user where query='$sText'";
		break;
    }

	$result = mysql_query($query, $id);
	$num_rows = mysql_num_rows($result);
    
	if ($num_rows < 1)
	{
		echo "<span class='STYLEXXX'>Sorry! There is no result matching your search in our database!<br></span>";
	}
	
else
{
    switch ($iType)
    {
    case 1:
		$query = "select * from movies where mid='$sText'";
		echo "<span class='STYLEXXX'>The movie you search is as follows:</span>";
		echo "<br>";
		echo "<table boder='1' cellspacing='0' cellpadding='3' class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55>ID</td>";
        echo "<td width=55>Year</td>";
        echo "<td width=700>Title</td>";
        echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
	    $result = mysql_query($query, $id);
        $info = mysql_fetch_array($result);
        echo "<tr>";
        echo "<td>".$info['mid']."</td>";
        echo "<td>".$info['year']."</td>";
        echo "<td>".$info['title']."</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
		echo "<br><br>";
		echo "<span class='STYLEXXX'>The 10 movies which meet your search are:<br><br></span>";
	    $query = "select * from movie2movie where query='$sText'";
        break;
    case 2:
		$query = "select * from movies where mid='$sText'";
		echo "<span class='STYLEXXX'>The movie you search is as follows:</span>";
		echo "<br>";
		echo "<table boder='1' cellspacing='0' cellpadding='3' class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55>ID</td>";
        echo "<td width=55>Year</td>";
        echo "<td width=700>Title</td>";
        echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
	    $result = mysql_query($query, $id);
        $info = mysql_fetch_array($result);
        echo "<tr>";
        echo "<td>".$info['mid']."</td>";
        echo "<td>".$info['year']."</td>";
        echo "<td>".$info['title']."</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
		echo "<br><br>";
		echo "<span class='STYLEXXX'>The 10 users which meet your search are:<br><br></span>";
	    $query = "select * from movie2user where query='$sText'";
        break;
    case 3:
		echo "<span class='STYLEXXX'>The user you search is as follows:</span>";
		echo "<br>";
		echo "<table boder='1' cellspacing='0' cellpadding='3' class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55>ID</td>";
        echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        echo "<tr>";
        echo "<td>$sText</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
		echo "<br><br>";
		echo "<span class='STYLEXXX'>The 10 movies which meet your search are:<br><br></span>";
	
	    $query = "select * from user2movie where query='$sText'";
        break;
	case 4:
		echo "<span class='STYLEXXX'>The user you search is as follows:</span>";
		echo "<br>";
		echo "<table boder='1' cellspacing='0' cellpadding='3' class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55>ID</td>";
        echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        echo "<tr>";
        echo "<td>$sText</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
		echo "<br><br>";
		echo "<span class='STYLEXXX'>The 10 users which meet your search are:<br><br></span>";
		$query="select * from user2user where query='$sText'";
    }
    $result = mysql_query($query, $id);
	$num_rows = mysql_num_rows($result);
	$fetQ = mysql_fetch_array($result);
    switch ($iType)
    {
    case 1:		
		echo "<table boder='1' cellspacing='0' cellpadding='3'class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55 >ID</td>";
        echo "<td width=55>Year</td>";
        echo "<td width=700>Title</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for ($number=1; $number<=10; $number++)
        {
            $item = "movie".$number;
	        $query = "select * from movies where mid=$fetQ[$item]";
	        $result = mysql_query($query, $id);
	        $num_rows = mysql_num_rows($result);
            $info = mysql_fetch_array($result);
            echo "<tr>";
            echo "<td align='left' valign='top'>".$info['mid']."</td>";
            echo "<td align='left' valign='top'>".$info['year']."</td>";
            echo "<td align='left' valign='top'>".$info['title']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        break;
    case 2:
        echo "<table class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        for ($number=1; $number<=10; $number++)
        {
            echo "<td width='55'>User".$number."</td>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        for ($number=1; $number<=10; $number++)
        {
            $item = "user".$number;
            echo "<td>".$fetQ[$item]."</td>";
        }
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        break;
    case 3:
        echo "<table class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        echo "<td width=55>ID</td>";
        echo "<td width=45>Year</td>";
        echo "<td width=700>Title</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for ($number=1; $number<=10; $number++)
        {
            $item = "movie".$number;
	        $query = "select * from movies where mid=$fetQ[$item]";
	        $result = mysql_query($query, $id);
	        $num_rows = mysql_num_rows($result);
            $info = mysql_fetch_array($result);
            echo "<tr>";
            echo "<td valign='top'>".$info['mid']."</td>";
            echo "<td valign='top'>".$info['year']."</td>";
            echo "<td valign='top'>".$info['title']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        break;
	   case 4:
        echo "<table class='STYLEXXX'>";
        echo "<thead>";
        echo "<tr>";
        for ($number=1; $number<=10; $number++)
        {
            echo "<td width='55'>User".$number."</td>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        for ($number=1; $number<=10; $number++)
        {
            $item = "user".$number;
            echo "<td>".$fetQ[$item]."</td>";
        }
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        break;
		break;
    }
}
?>