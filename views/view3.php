<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include('header.php');
include('../models/Employees.php');
include('../models/Library.php');
include('../config/Database.php'); ?>

<div class="content-area">
    <h2>View 3</h2>
    <table>

        <tr id="table-header">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>


        <?php


        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $db = $database->connect();


        //Select Table
        $query = "SELECT * FROM `view_3`";

        $stmt = $db->prepare($query);

        $stmt->execute();

        //blog post query

        //get row count
        $num = $stmt->rowCount();
        if ($num > 0) {
            $employees_arr = array();
            $employees_arr['data'] = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                // Select required rows to be displayed for view 3
                $employees_item = array(
                    'Employees_Id' => $Employees_Id,
                    'E_FName' => $E_FName,
                    'E_LName' => $E_LName,
                );
                echo "<tr><td>" . $Employees_Id . "</td><td>" . $E_FName . "</td><td>" . $E_LName . "</td></tr>";
            }
        } else {
            echo "<h1>There are 0 rows</h1>";
        }
        ?>
    </table>
</div>
</body>