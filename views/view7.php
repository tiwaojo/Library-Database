<!-- This contains the methods for views -->
<?php
header("Access-Control-Allow-Orgin: *");
include('header.php');
include('../models/Employees.php');
include('../config/Database.php'); ?>

<div class="content-area">
    <h2>View 7</h2>

        <?php
        //instantiate and connect to DB
        $database = new LibraryDatabase();
      $conn = $database->connectsqli();

        //Select Table
        $sql = "SELECT * FROM `employees at library 1`";

        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>Employee ID</th><th> First Name</th><th> Last Name</th><th> Email</th><th>Username</th><th>Password</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Employees_Id"]."</td><td>".$row["E_FName"]."</td><td>".$row["E_LName"]."</td><td> ".$row["E_Email"]."</td><td>".$row["E_Username"]."</td><td>".$row["E_Password"]."</td><tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>

</div>
</body>
