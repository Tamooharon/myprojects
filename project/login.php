<?php
//start the session
session_start();

//check if someone submited the login form
if(isset($_POST['username'])) 
{
	//include database connection file
	include "conn.php";
	
	$sql = "SELECT * FROM events WHERE username ='".$_POST['username']."' AND password ='".$_POST['password']."'";
	
	//execute the query and store the record set in the variable $result
	$result=mysql_query($sql) or die("couldn't select  ".mysql_error());
	
	//count the number of rows returned
	$num = mysql_num_rows($result);	

	if($num > 0) //user entered valid login details
	{
		//do the checks to verify the users info here before you set the session variables 
		$_SESSION['username'] = mysql_result($result,0,"username");
		$_SESSION['password'] = mysql_result($result,0,"password");
		
		//redirect the user to the valid login page
		header("location: validlogin.php");
	}
	else
	{
		//redirect the user to the invalid login page
		header("location: invalidlogin.php");
	}
}
else
{
		//redirect the user to the home page
		header("location: home.php");
}
?>

