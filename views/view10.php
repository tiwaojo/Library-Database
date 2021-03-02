<!-- Similar to booklist in navbar. readbooks.php & Books dir in LibDatabase has been removed  -->
<?php
header("Access-Control-Allow-Orgin: *");
include('header.php');
include('../models/Employees.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect(); ?>


<div class="content-area">
    <h2>View 10</h2>
    <table>

        <tr id="table-header">
            <th>ISBN</th>
            <th>Book</th>
            <th>Publisher_Id</th>
            <th>Genre_Id</th>
        </tr>

        <?php
        //Select Table
        $query = "SELECT * FROM `view 10`";
        $stmt = $db->prepare($query);
        $stmt->execute();

        //blog post query
        // $res = $employee->view1();

        //get row count
        $num = $stmt->rowCount();
        if ($num > 0) {
            $view_arr = array();
            $view_arr['data'] = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                // Select required rows to be displayed for view 10
                $view_item = array(
                    'ISBN' => $ISBN,
                    'Book_Title' => $Book_Title,
                    'Publisher_Id' => $Publisher_Id,
                    'Genre_Id' => $Genre_Id,
                );
                echo "<tr><td>" . $ISBN . "</td><td>" . $Book_Title . "</td><td>" . $Publisher_Id . "</td><td>" . $Genre_Id . "</td></tr>";
            }
        } else {
            echo "<h1>There are 0 rows</h1>";
        }
        ?>
    </table>
</div>
</body>