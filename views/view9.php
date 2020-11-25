
 
<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('../header.php');?>

<div class = "Title">
        <h2>View 9</h2>
</div>
<div class= "content-area">
    <table>
    
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
     

<?php
// include_once('E:\wamp64\www\Library-Database\models\member\s.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../models/Members.php');

include('../models/Library.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $member = new member($db);
$query = "SELECT * FROM `view 9`";

       $stmt = $db->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();

//blog post query
// $res = $member->view1();

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
        //  'Library_Name' => $Library_Name,
          //'NumberOfmember' => $NumberOfmember,
            //'members_Id' => $members_Id,

            'M_FName' => $M_FName,
            'M_LName' => $M_LName,
            'M_Email' => $M_Email,
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
echo "<tr><td>".$M_FName."</td><td>".$M_LName."</td><td>".$M_Email."</td></tr>";
// echo $row["members_Id"];
        //push data
    //    array_push($member_arr['data'], $member_item);
    }
    //turn to json & output
    // echo json_encode($member_arr);
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
