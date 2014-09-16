<?php
echo <<<_END
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Format Converter</title>
</head>
<body>
	<form method="post" action="index.php" enctype="multipart/form-data">
	<p>
	Please upload your your input file:</br>
	</p>
	<input type="file" name="inputfile" size="40" />
	<input type="submit" value="Submit" />
_END;
	if ($_FILES) {
      echo "<a href='result.out'><img src='download.gif' alt='Download' titile='Download the output file!' /></a>";	
	}
	echo "</form>";
if ($_FILES) {
  $filename = $_FILES['inputfile']['name'];
  move_uploaded_file($_FILES['inputfile']['tmp_name'], $filename);
  $out_file_name = "result.out";
  generate_output($filename, $out_file_name);
  unlink($filename);
}

function generate_output($in_file_name, $out_file_name) {
  $in_file = fopen($in_file_name, 'r') or 
    die("File does not exist or you lack permission to open it!");
  $out_file = fopen($out_file_name, 'w') or 
    die("Cannot generate output file or you lack permission to generate it!");
  $flag = FALSE;
  while (($line = fgets($in_file, 4096)) != FALSE) {
    $arr = preg_split('/[\s]+/', $line, -1, PREG_SPLIT_NO_EMPTY);
	if (count($arr) == 0) {
	  continue;
	}
	if ($flag == FALSE) {
	  if ($arr[0] == 'X_Value') {
	    $flag = TRUE;
	  }
	} else {
	  if (count($arr) == 2) {
	    fprintf($out_file, "\n%s %s ", $arr[0], $arr[1]);
	  } elseif (count($arr) == 1) {
	    fprintf($out_file, "%s ", $arr[0]);
	  }
	}
  } 
  fclose($in_file);
  fclose($out_file);  
}
echo <<<_END
</body>
</html>
_END;
?>