<!-- This contains the methods for views -->
<?php
header("Access-Control-Allow-Orgin: *");
include('header.php');
include('../config/Database.php'); ?>

<div class="content-area">
    <h2>View 6</h2>
    <table>
        <tr id="table-header">
            <th>ISBN</th>
            <th>Book</th>
            <th>Genre</th>
        </tr>

        <?php
        //instantiate and connect to DB
        $database = new LibraryDatabase();
        $db = $database->connect();

        //Select Table
        $query = "SELECT * FROM `find all horror books`";

        $stmt = $db->prepare($query);
        $stmt->execute();

        //blog post query
        //get row count
        $num = $stmt->rowCount();
        if ($num > 0) {
            $view_arr = array();
            $view_arr['data'] = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                // Select required rows to be displayed for view 6
                $view_item = array(
                    'ISBN' => $ISBN,
                    'Book_Title' => $Book_Title,
                    'Genre_Name' => $Genre_Name,
                );
                echo "<tr><td>" . $ISBN . "</td><td>" . $Book_Title . "</td><td>" . $Genre_Name . "</td></tr>";
            }
        } else {

            echo "<h1>There are 0 rows</h1>";
        }
        ?>
    </table>
</div>
</body>