<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");


// include_once('E:\wamp64\www\Library-Database\models\Employees.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../models/Employees.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$employee = new Employee($db);


//blog post query
$res = $employee->view1();

//get row count
$num = $res->rowCount();
if ($num > 0) {
    $employee_arr = array();
    $employee_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $employee_item = array(
            'Employees_Id' => $Employees_Id,
            'E_FName' => $E_FName,
            'E_LName' => $E_LName,
            // 'E_BDate' => $E_BDate,
            'E_Email' => $E_Email,
            // 'E_Address' => $E_Address,
            // 'E_Sex' => $E_Sex,
            'E_Username' => $E_Username,
            'E_Password' => $E_Password,
        );
//  echo "<tr><td>".$Employees_Id."</td><td>".$E_FName."</td><td>".$E_LName."</td><td>".$E_Email."</td><td>".$E_Username."</td><td>".$E_Password."</td></tr>";
// echo $row["employees_Id"];
        //push data
       array_push($employee_arr['data'], $employee_item);
    }
    //turn to json & output
    echo json_encode($employee_arr);
} else {
    echo json_encode(
        array("message" => 'No posts Found')
    );
    echo "<h1>There are 0 rows</h1>";
}
// $res = $employee->view1();
// $query = "SELECT * FROM ".$this->tablename;
// // $stmt = $this->conn->prepare($query);
// $r = mysqli_query($query,$db);
// $row = mysqli_fetch_array($r);

// while($row = mysqli_fetch_assoc($r)){

//     echo "<tr><td>".$row["employees_Id"]."</td><td>".$row["M_FName"]."</td><td>".$row["M_LName"]."</td></tr>";
// }

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