<!-- This contains the methods for views -->
<?php

include('header.php');?>

<div class="content-area">
    <h2>View 7</h2>
    <table>
    <tr id="table-header">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php

header("Access-Control-Allow-Orgin: *");
include('../models/Employees.php');
include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

//Select Table
$query = "SELECT * FROM `employees at library 1`";
       
       $stmt = $db->prepare($query);
        $stmt->execute();

//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $employee_arr = array();
    $employee_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // Select required rows to be displayed for view 7
        $employee_item = array(
            'Employees_Id' => $Employees_Id,
            'E_FName' => $E_FName,
            'E_LName' => $E_LName,
            'E_Email' => $E_Email,
            'E_Username' => $E_Username,
            'E_Password' => $E_Password,
        );
echo "<tr><td>".$Employees_Id."</td><td>".$E_FName."</td><td>".$E_LName."</td><td>".$E_Email."</td><td>".$E_Username."</td><td>".$E_Password."</td></tr>";

    }

} else {
    echo "<h1>There are 0 rows</h1>";
}
?>
    </table>
</div>
</body>