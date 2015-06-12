<html>
<head><title></title>A FORM FOR ENTERING DETAILS</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<style>
table
{
 margin-left: 100px;
}
</style>
<form method="post" action="infosub.php">
 <link rel="stylesheet" href="bootstrap.css">
  <table border="0" width="400">
    <tr>
        <td>id</td>
        <td><input type="text" name="id"/></td>
    </tr>
    <tr>
        <td>work</td>
        <td><input type="text" name="work"/></td>
     </tr>
     <tr>
        <td>date</td>
        <td><input type="date" name="date"/></td>
    </tr>
     <tr>
	<td>time</td>
	<td><input type="time" name="time"/></td>
      </tr>
      <tr>
        <td>Venue</td>
         <td><input type="text" name="venue"/></td>  
    </tr>
     <tr>
         <td><input type="submit" name="submit" value="submit"/></td>
         <td><input type="reset"  name="reset"  value="Reset"/></td>
         <td><a href="home.php">Home</a></td>
     </tr>
  </table>
</form>
</body>
</html>
