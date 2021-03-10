<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include_once('../index.php');
include('../models/Employees.php');
include('../models/Library.php');
include('../config/Database.php'); ?>

<div id="content-area">
    <h2>View 2</h2>



        <?php

        //instantiate and connect to DB
        $database = new LibraryDatabase();
      $conn = $database->connectsqli();

        //Select Table
        $sql = "SELECT * FROM `view 2`";

      $result = $conn->query($sql);
      if (!$result) {
          trigger_error('Invalid query: ' . $conn->error);
      }

        //blog post query

        //get row count
        if ($result->num_rows > 0) {
          echo "<table><tr><th>Library Name</th><th>Number of Employees</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Library_Name"]."</td><td>".$row["NumberOfEmployees"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>

</div>
</body>
