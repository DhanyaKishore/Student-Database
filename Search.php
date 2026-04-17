<html>
<head>
<style>
body {
  font-family: Arial;
  background-color: #f5f5f5;
}
table {
  border-collapse: collapse;
  width: 60%;
  margin: 20px auto;
  background: white;
}
th, td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}
th {
  background-color: #ddd;
}
h2 {
  text-align: center;
}
</style>
</head>

<?php
$regno = $_POST['reg'];

if(empty($regno)){
    die("<h3 style='text-align:center;'>Please enter Register Number</h3>");
}

$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM TCS WHERE reg='$regno'";
$result = mysqli_query($conn, $sql);

echo "<h2>Search Result</h2>";

if($result && mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr>
            <th>Reg.No</th>
            <th>Name</th>
            <th>Mark1</th>
            <th>Mark2</th>
            <th>Total</th>
          </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>
                <td>{$row['reg']}</td>
                <td>{$row['name']}</td>
                <td>{$row['m1']}</td>
                <td>{$row['m2']}</td>
                <td>{$row['total']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<h3 style='text-align:center;'>No student found</h3>";
}

mysqli_close($conn);
?>

<form method="POST" action="stud.html" style="text-align:center;">
<input type='submit' value='Home'/>
</form>

</html>
