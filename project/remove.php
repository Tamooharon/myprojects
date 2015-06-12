<html>
<head>
<title>Delete a Record from MySQL Database</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>

<?php
if(isset($_POST['delete']))
{
	require ("conn.php");// establishing connections to the database


$id = $_POST['id'];

$sql = "DELETE FROM task ".
       "WHERE id = $id" ;

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
 echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">ID</td>
<td><input name="id" type="text" id="id"></td>
</tr>
<tr>
<td width="100"> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
<td><a href="display.php">View Db content</a></td>
</tr>
</table>
<td><a href="home.php">Home</a></td><br>

</form>
<?php
}
?>

</body>
</html>
