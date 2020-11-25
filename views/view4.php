<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");



include('../models/Members.php');
include('../config/Database.php');

//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$member = new Members($db);

//sql query to insert data
$query="SELECT * FROM `view 4`";

$stmt = $db->prepare($query);

// Bind ID
// $stmt->bindParam(1, $this->id);

// Execute query
$stmt->execute();


//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
            // 'Members_Id' => $Members_Id,
            'M_FName' => $M_FName,
            'M_LName' => $M_LName,
            // 'M_BDate' => $M_BDate,
            'M_Email' => $M_Email,
            'M_Address' => $M_Address,
            'M_Sex' => $M_Sex,
            // 'M_Username' => $M_Username,
            'Loan_Id'=>$Loan_Id,
            'Date_Loaned' => $Date_Loaned,
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