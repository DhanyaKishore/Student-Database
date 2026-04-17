<html>
<head>
<style>
body {
  font-family: Arial;
  background-color: #f5f5f5;
}
table {
  border-collapse: collapse;
  width: 80%;
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
$conn = new mysqli("localhost", "root", "", "LDCSTUD");

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

echo "<h2>STUDENT DETAILS</h2>";

$sql = "SELECT * FROM TCS";
$result = mysqli_query($conn, $sql);

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
    echo "<h3 style='text-align:center;'>No records found</h3>";
}

mysqli_close($conn);
?>

<form method="POST" action="stud.html" style="text-align:center;">
<input type='submit' value='Home'/>
</form>

</html>
