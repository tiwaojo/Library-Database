<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');?>


<div class="content-area">
    <h2>View 8 </h2>
    <table>

        <tr>
            <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>

        <?php
    
    // include_once('E:\wamp64\www\Library-Database\models\employees\s.php');
    // include_once('E:\wamp64\www\Library-Database\config\Database.php');
    include('../models/Members.php');
    include('../models/loaned_book.php');
    include('../config/Database.php');
    
   //instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();


$query = "SELECT * FROM `memberloaned`";

       $stmt = $db->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();

//blog post query
// $res = $employees->view1();

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
        //   'Library_Name' => $Library_Name,
        //   'NumberOfEmployees' => $NumberOfEmployees,
            // 'Employees_Id' => $Employees_Id,
           
            //'Due_Date' => $Due_Date,
            //'Book_Title' => $Book_Title,
         'Members_Id' => $Members_Id,
            'M_Fname' => $M_Fname,
            'M_LName' => $M_LName,
            // 'E_BDate' => $E_BDate,
            //'E_Email' => $E_Email,
            // 'E_Address' => $E_Address,
            // 'E_Sex' => $E_Sex,
            //'E_Username' => $E_Username,
            //'E_Password' => $E_Password,
        );
echo "<tr><td>".$Members_Id."</td><td>".$M_Fname."</td><td>".$M_LName."</td></tr>";
// // echo $row["employees_Id"];
//         //push data
//        array_push($employees_arr['data'], $employees_item);
    }
    // //turn to json & output
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