<?php
$username = "edwardv3_ideas";
$password = "actionableideas";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
  
mysql_select_db('edwardv3_ideas', $dbhandle);

?>