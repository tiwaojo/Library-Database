 <?php
    header("Access-Control-Allow-Orgin: *");
    include_once('../index.php');
    include('../models/Members.php');
    include('../models/Library.php');
    include('../config/Database.php');
    ?>

 <div id="content-area">
     <h2>View 9</h2>

         <?php


            //instantiate and connect to DB
            $database = new LibraryDatabase();
            $conn = $database->connectsqli();

            //Select Table
            $sql = "SELECT * FROM `view 9`";
            $result = $conn->query($sql);
            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }//if statement stating that its a connection error
            //if table is there then it will echo a table for some book variables
            if ($result->num_rows > 0) {
              echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["M_FName"]."</td><td>".$row["M_LName"]."</td><td> ".$row["M_Email"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>

 </div>
 </body>
