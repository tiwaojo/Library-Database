<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


include_once('E:\wamp64\www\Library-Database\models\Employees.php');
include_once('E:\wamp64\www\Library-Database\config\Database.php');
// include('../../models/Employees.php');
// include('../../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $employee = new Employee($db);

// $res = $employee->view1();
$query = "SELECT * FROM 'employees at library 1'";
// $stmt = $this->conn->prepare($query);
$r = mysqli_query($query,$db);
$row = mysqli_fetch_array($r);

while($row = mysqli_fetch_assoc($r)){

    echo "<tr><td>".$row["Members_Id"]."</td><td>".$row["M_FName"]."</td><td>".$row["M_LName"]."</td></tr>";
}

// // Insert link to Database.php here so we can connect to our database without writing sam code again
// $query = "SELECT * FROM database_inc.employees";


// if ($stmt = $con->prepare($query)) {
//     $stmt->execute();
//     $stmt->bind_result($field1, $field2);
//     while ($stmt->fetch()) {
//         //printf("%s, %s\n", $field1, $field2);
//     }
//     $stmt->close();
// }
?>