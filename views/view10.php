<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View 10</title>
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
        <h2>View 2</h2>
</div>
<div class= "content-area">
    <table>
    
        <tr>
            <th>Library Name</th>
            <th>Number of Employees</th>
        </tr>
     
<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


// include_once('E:\wamp64\www\Library-Database\models\employees\s.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../models/Employees.php');


include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $employee = new Employee($db);
$query = "SELECT * FROM `view 10`";
       
       $stmt = $db->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();

//blog post query
// $res = $employee->view1();

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $view_arr = array();
    $view_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $view_item = array(
            'ISBN' => $ISBN,
            'Book_Title' => $Book_Title,
            'Publisher_Id' => $Publisher_Id,            
            'Genre_Id' => $Genre_Id, 
        );
echo "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Publisher_Id."</td><td>".$Genre_Id."</td></tr>";
// echo $row["employees_Id"];
    //     //push data
    //    array_push($view_arr['data'], $view_item);
    }
    //turn to json & output
    echo json_encode($view_arr);
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