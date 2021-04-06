<?php
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");

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
    $employee_arr = array();//makes array for employees
    $employee_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {//feeds variables into assoc array
        extract($row);


        $employee_item = array(
            'Employees_Id' => $Employees_Id,
            'E_FName' => $E_FName,
            'E_LName' => $E_LName,
        );

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
