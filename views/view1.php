<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
//header("Content-type: application/json");
include_once('../index.php');
include('../models/Members.php');
include('../config/Database.php');
?>

<div id="content-area">
    <h2>Members with due books</h2>


        <?php
        //instantiate and connect to DB
        $database = new LibraryDatabase();

        $conn = $database->connectsqli();

        //Select Table
        $sql = "SELECT * FROM `view 1`";



        //blog post query

        //get row count
        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>First Name</th><th>Due Date</th><th>Book Title</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["M_FName"]."</td><td>".$row["Due_Date"]."</td><td> ".$row["Book_Title"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>

</div>
</body>
