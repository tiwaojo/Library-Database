<!-- This contains the methods for views -->
<?php
header("Access-Control-Allow-Orgin: *");
include('header.php');
include('../config/Database.php'); ?>

<div class="content-area">
    <h2>View 6</h2>


        <?php
        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $conn = $database->connectsqli();

        //Select Table
        $sql = "SELECT * FROM `find all horror books`";

        $result = $conn->query($sql);
        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }//if statement stating that its a connection error
        //if table is there then it will echo a table for some book variables
        if ($result->num_rows > 0) {
          echo "<table><tr><th>Book Title</th><th>ISBN</th><th>Genre Name</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Book_Title"]."</td><td>".$row["ISBN"]."</td><td> ".$row["Genre_Name"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();

        ?>

</div>
</body>
