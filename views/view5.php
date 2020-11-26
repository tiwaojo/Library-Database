     

<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');?>

<div class= "content-area">
    <h2>View 5</h2>
    <table>
        <tr>
            <th>Member ID</th>
            
        </tr>
<?php

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
  echo "<tr><td>".$Members_Id."</td></tr>";
// // echo $row["Members_Id"];
//         //push data
//        array_push($member_arr['data'], $member_item);
    }
//     //turn to json & output
//     echo json_encode($member_arr);
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