<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include_once('../index.php');
include('../models/Employees.php');
include('../models/Library.php');
include('../config/Database.php'); ?>

<div id="content-area">
    <h2>View 3</h2>



        <?php


        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $conn = $database->connectsqli();



        $sql = "SELECT * FROM `view_3`";

        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>Employee First Name</th><th>Employee Last Name</th><th>Employees ID</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["E_FName"]."</td><td>".$row["E_LName"]."</td><td> ".$row["Employees_Id"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>

</div>
</body>
