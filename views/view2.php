<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include_once('../index.php');
include('../models/Employees.php');
include('../models/Library.php');
include('../config/Database.php'); ?>

<div id="content-area">
    <h2>View 2</h2>
    <table>
        <tr id="table-header">
            <th>Library Name</th>
            <th>Number of Employees</th>
        </tr>

        <?php

        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $db = $database->connect();

        //Select Table
        $query = "SELECT * FROM `view 2`";

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

                // Select required rows to be displayed for view 2

                $employees_item = array(
                    'Library_Name' => $Library_Name,
                    'NumberOfEmployees' => $NumberOfEmployees,
                );
                echo "<tr><td>" . $Library_Name . "</td><td>" . $NumberOfEmployees . "</td></tr>";
            }
        } else {
            echo "<h1>There are 0 rows</h1>";
        }
        ?>
    </table>
</div>
</body>