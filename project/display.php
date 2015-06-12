<?php 
require ("conn.php");
$sql="SELECT * FROM task";
$records=mysql_query($sql);
?>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>

<h1>Database Content Display</h1>
<table width="500px" border="1" cellpaddin="5">
<tr>
<th>id</th>
<th>work</th>
<th>date</th>
<th>time</th>
<th>venue</th>
</tr>

<?php
  while($result=mysql_fetch_assoc($records))
  {
	  echo "<tr>";
	  echo "<td>".$result['id']."</td>";
	  echo "<td>".$result['work']."</td>";
	  echo "<td>".$result['date']."</td>";
	  echo "<td>".$result['time']."</td>";
	  echo "<td>".$result['venue']."</td>";
       echo"</tr>";
}
 ?>
</table>

         <a href="home.php">Home</a>

</body>
</html>
