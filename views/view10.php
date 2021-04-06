<!-- Similar to booklist in navbar. readbooks.php & Books dir in LibDatabase has been removed  -->
<?php
header("Access-Control-Allow-Orgin: *");
include_once('../index.php');
include('../models/Employees.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
  $conn = $database->connectsqli(); ?>


<div id="content-area">
    <h2>View 10</h2>


        <?php
        //Select Table
        $sql = "SELECT * FROM `view 10`";
        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>ISBN</th><th>Book Title</th><th>Publisher ID</th><th>Genre ID<th/></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["ISBN"]."</td><td>".$row["Book_Title"]."</td><td> ".$row["Publisher_Id"]."</td><td>".$row["Genre_Id"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>

</div>
</body>
