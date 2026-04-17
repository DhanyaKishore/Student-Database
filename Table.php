<html>
<?php
$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection Established<br>";

$sql = "CREATE TABLE IF NOT EXISTS TCS(
  reg VARCHAR(10) PRIMARY KEY,
  name VARCHAR(50),
  m1 INT,
  m2 INT,
  total INT
)";

if(mysqli_query($conn,$sql)){
 echo "Table created successfully";
} else {
 echo "Error: " . $conn->error;
}

mysqli_close($conn);
?>
<form method="POST" action="stud.html">
<input type='submit' value='Home'/>
</form>
</html>
