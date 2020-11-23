<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");


// include_once 'E:\wamp64\www\Library-Database\models\Members.php';
// include_once 'E:\wamp64\www\Library-Database\config\Database.php';
include('../models/Members.php');
include('../config/Database.php');

//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$query = "SELECT * FROM `nestedqueryunion`";
//blog post query
$stmt = $db->prepare($query);
 // $stmt->bindParam(1, $this->id);
 $stmt->execute();
 $num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
             'Members_Id' => $Members_Id,
        );
//  echo "<tr><td>".$M_FName."</td><td>".$M_LName."</td><td>".$M_Email."</td><td>".$M_Address."</td><td>".$M_Sex."</td><td>".$Loan_Id."</td><td>".$Date_Loaned."</td></tr>";
// echo $row["Members_Id"];
        //push data
       array_push($member_arr['data'], $member_item);
    }
    //turn to json & output
    echo json_encode($member_arr);
} else {
    echo json_encode(
        array("message" => 'No posts Found')
    );
    echo "<h1>There are 0 rows</h1>";
}

?>
