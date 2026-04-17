<html>
<?php
$regno = $_POST['reg'];
$name = $_POST['name'];

if(empty($regno) || empty($name)){
    die("All fields are required");
}

$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE TCS SET name='$name' WHERE reg='$regno'";

if(mysqli_query($conn,$sql)){
 echo "Record Updated Successfully";
} else {
 echo "Error: " . $conn->error;
}

mysqli_close($conn);
?>
<form method="POST" action="stud.html">
<input type='submit' value='Home'/>
</form>
</html>
