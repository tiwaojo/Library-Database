<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View 5</title>
        <link rel="stylesheet" href="../CSS/navstyle.css">
    </head>
<body>
<div class= "box-area">
        <header>
            <div class= "wrapper">
                <nav>
                    <a href="../index.php">Home</a>
                    <a href="../memberslist.php">Members</a>
                    <a href="../signin.php">Sign-In</a>
                    <a href="../signup.php">Register</a>
                    <a href="../booklist.php">Book List</a>
                    <a href="../librarylist.php">Visit Us!</a>
                    <div class= "views">
                        <button class="dropbtn">Views</button>
                        <div class="dropdown-views">
                            <a href="view1.php"> View 1</a>
                            <a href="view2.php"> View 2</a>
                            <a href="view3.php"> View 3</a>
                            <a href="view4.php"> View 4</a>
                            <a href="view5.php"> View 5</a>
                            <a href="view6.php"> View 6</a>
                            <a href="view7.php"> View 7</a>
                            <a href="view8.php"> View 8</a>
                            <a href="view9.php"> View 9</a>
                            <a href="view10.php">View 10</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
</div>
    <div class = "Title">
        <h2>View 5 </h2>
</div>
<div class= "content-area">
    <table>
    
        <tr>
            <th>Member ID</th>
            
        </tr>
     

<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


// include_once('E:\wamp64\www\Library-Database\models\employees\s.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');

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