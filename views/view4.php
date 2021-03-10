<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include_once('../index.php');
include('../models/Members.php');
include('../config/Database.php'); ?>

<div id="content-area">
    <h2>View 4</h2>




        <?php
        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $conn = $database->connectsqli();

        //sql query to insert data
        //Select Table
        $sql = "SELECT * FROM `view 4`";

        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Sex</th><th>Loan ID</th><th>Date Loaned</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["M_FName"]."</td><td>".$row["M_LName"]."</td><td> ".$row["M_Email"]."</td><td>".$row["M_Address"]."</td><td>".$row["M_Sex"]."</td><td>".$row["Loan_Id"]."</td><td>".$row["Date_Loaned"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>

</div>
</body>
