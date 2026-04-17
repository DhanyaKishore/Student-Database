<html>
<?php
$regno = $_POST['reg'];

if(empty($regno)){
    die("Register number required");
}

$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM TCS WHERE reg='$regno'";

if(mysqli_query($conn,$sql)){
 echo "Record Deleted Successfully";
} else {
 echo "Error: " . $conn->error;
}

mysqli_close($conn);
?>
<form method="POST" action="stud.html">
<input type='submit' value='Home'/>
</form>
</html>
