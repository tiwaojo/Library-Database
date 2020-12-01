<?php
include('../config/Database.php');
//instantiate and connect to DB
$database = new LibraryDatabase();
$conn = $database->connectsqli();

$sql = "SELECT Members_Id, M_FName, M_LName FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Members_Id"]."</td><td>".$row["M_FName"]." ".$row["M_LName"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
