<!-- This contains the methods for views -->
<?php
include_once('../index.php');
include('../models/Members.php');
include('../models/loaned_book.php');
include('../config/Database.php'); ?>


<div id="content-area">
    <h2>View 8 </h2>
    <table>

        <tr id="table-header">
            <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>

        <?php

        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $db = $database->connect();

        //Select Table
        $query = "SELECT * FROM `memberloaned`";

        $stmt = $db->prepare($query);

        $stmt->execute();
        $num = $stmt->rowCount();
        if ($num > 0) {
            $member_arr = array();
            $member_arr['data'] = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                // Select required rows to be displayed for view 8
                $member_item = array(
                    'Members_Id' => $Members_Id,
                    'M_Fname' => $M_Fname,
                    'M_LName' => $M_LName,
                );
                echo "<tr><td>" . $Members_Id . "</td><td>" . $M_Fname . "</td><td>" . $M_LName . "</td></tr>";
            }
        } else {
            echo "<h1>There are 0 rows</h1>";
        }
        ?>
    </table>
</div>
</body>