<!-- This contains the methods for views -->
<?php
include('header.php');
include('../models/Members.php');
include('../models/loaned_book.php');
include('../config/Database.php'); ?>


<div class="content-area">
    <h2>View 8 </h2>

        <?php

        //instantiate and connect to DB
        $database = new LibraryDatabase();
          $conn = $database->connectsqli();

        //Select Table
        $sql = "SELECT * FROM `memberloaned`";

        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>Member ID </th><th> First Name </th><th> Last Name</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Members_Id"]."</td><td>".$row["M_Fname"]."</td><td> ".$row["M_LName"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>

</div>
</body>
