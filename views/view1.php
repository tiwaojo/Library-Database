<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include('header.php');
?>

<div class= "content-area">
    <h2>Members with due books</h2>
    <table>
    <tr id="table-header">
            <th>First Name</th>
            <th>Due Date</th>
            <th>Book Title</th>
        </tr>
     
<?php
    include('../models/Members.php');
    include('../config/Database.php');


    //instantiate and connect to DB
    $database = new LibraryDatabase();
    $db = $database->connect();
    
    //Select Table
    $query = "SELECT * FROM `view 1`";

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

            // Select required rows to be displayed for view 1
            $member_item = array(
                'M_FName' => $M_FName,
                'Due_Date' => $Due_Date,
                'Book_Title' => $Book_Title,
                
            );
         
    echo "<tr><td>".$M_FName."</td><td>".$Due_Date."</td><td>".$Book_Title."</td></tr>";
  
        }
     
    } else {
        echo "<h1>There are 0 rows</h1>";
    }
    ?>
</table>
</div>
</body>