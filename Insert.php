<html>
<?php
$regno = $_POST['reg'];
$name = $_POST['name'];
$mark1 = $_POST['m1'];
$mark2 = $_POST['m2'];

if(empty($regno) || empty($name) || empty($mark1) || empty($mark2)){
    die("All fields are required");
}

$total = $mark1 + $mark2;

$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO TCS VALUES('$regno', '$name', $mark1, $mark2, $total)";

if(mysqli_query($conn,$sql)){
 echo "Record Inserted Successfully";
} else {
 echo "Error: " . $conn->error;
}

mysqli_close($conn);
?>
<form method="POST" action="stud.html">
<input type='submit' value='Home'/>
</form>
</html>
