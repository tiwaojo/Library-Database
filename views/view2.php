<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');?>

<div class= "content-area">
    <h2>View 2</h2>
    <table>
       <tr>
            <th>Library Name</th>
            <th>Number of Employees</th>
        </tr>
     
<?php

// include_once('E:\wamp64\www\Library-Database\models\employees\s.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../models/Employees.php');

include('../models/Library.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $employees = new employees($db);
$query = "SELECT * FROM `view 2`";

       $stmt = $db->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();

//blog post query
// $res = $employees->view1();

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $employees_arr = array();
    $employees_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $employees_item = array(
          'Library_Name' => $Library_Name,
          'NumberOfEmployees' => $NumberOfEmployees,
            //'employeess_Id' => $employeess_Id,
          //  'M_FName' => $M_FName,
            //'Due_Date' => $Due_Date,
            //'Book_Title' => $Book_Title,
            //'E_LName' => $E_LName,
            // 'E_BDate' => $E_BDate,
            //'E_Email' => $E_Email,
            // 'E_Address' => $E_Address,
            // 'E_Sex' => $E_Sex,
            //'E_Username' => $E_Username,
            //'E_Password' => $E_Password,
        );
echo "<tr><td>".$Library_Name."</td><td>".$NumberOfEmployees."</td></tr>";
// // echo $row["employeess_Id"];
//         //push data
//        array_push($employees_arr['data'], $employees_item);
    }
    //turn to json & output
    // echo json_encode($employees_arr);
} else {
    // echo json_encode(
    //     array("message" => 'No posts Found')
    // );
    echo "<h1>There are 0 rows</h1>";
}
?>
</table>
</div>
</body>