<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");


// include_once('E:\wamp64\www\Library-Database\models\Members.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../../models/Employees.php');
include('../../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$employee = new Employee($db);

//blog post query
$res = $employee->view1();

//get row count
 $num=$res->rowCount();
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
            // 'E_Email' => $E_Email,
            // 'E_Address' => $M_Address,
            // 'E_Sex' => $M_Sex,
            // 'E_Username' => $M_Username,
            // 'E_Password' => $M_Password,
        );

// echo "<tr><td>".$Members_Id."</td><td>".$M_FName."</td><td>".$M_LName."</td></tr>";
// echo $row["Members_Id"];
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

?>