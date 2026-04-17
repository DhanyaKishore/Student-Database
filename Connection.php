<html>
<?php
$con = mysqli_connect('localhost','root','');

if(!$con){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connection Established<br>";

$sql = "CREATE DATABASE IF NOT EXISTS LDCSTUD";
if(mysqli_query($con, $sql)){
   echo "Database created successfully";
} else {
   echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
<form method="POST" action="stud.html">
<input type='submit' value='Home'/>
</form>
</html>
