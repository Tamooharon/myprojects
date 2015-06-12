<?php
//start the session
session_start();

if(isset($_SESSION['username'])) //the user is logged in
{
	//show the logged in users details
	echo "Welcome ".$_SESSION['username'];
	echo " | <a href='logout.php'>Logout</a>";

}
else //the user is not logged in
{
	//redirect the user to the home page
	header("location: home.php");
}
?>
