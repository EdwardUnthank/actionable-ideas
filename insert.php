<?php 
	require_once ('login/connections.php');
	
	$title = mysql_escape_string($_POST[ideaTitle]);
	$content = mysql_escape_string($_POST[ideaContent]);
	$category = mysql_escape_string($_POST[ideaCategory]);
	
	$sql="INSERT INTO content (title, content, category)
	VALUES
	('$title','$content','$category')";
	
	if (!mysql_query($sql,$dbhandle))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo "1 record added";
	 
	mysql_close($dbhandle)
?>