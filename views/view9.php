 <!-- This contains the methods for views -->
<?php


include('header.php');?>

<div class= "content-area">
    <h2>View 9</h2>
    <table>    
    <tr id="table-header">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
     
<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include('../models/Members.php');

include('../models/Library.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

//Select Table
$query = "SELECT * FROM `view 9`";
$stmt = $db->prepare($query);
$stmt->execute();

//blog post query

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // Select required rows to be displayed for view 9
        $member_item = array(
            'M_FName' => $M_FName,
            'M_LName' => $M_LName,
            'M_Email' => $M_Email,
        );
echo "<tr><td>".$M_FName."</td><td>".$M_LName."</td><td>".$M_Email."</td></tr>";

    }

} else {

    echo "<h1>There are 0 rows</h1>";
}
?>
</table>
</div>
</body>
