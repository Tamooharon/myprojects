<?php
//define the host of the mysql database
$dbhost = "localhost";

//define the mysql database user
$dbuser = "root";

//define the mysql database password
$dbpass = "!kibzernesto";

//define the database to be use
$dbselect = "eventlist";


//establish a connection to the database
$conn =mysql_connect($dbhost, $dbuser, $dbpass)or die("Could not connect to the database.");

//database to be used
$select=mysql_select_db($dbselect,$conn) or die("Could not select database");

?>

