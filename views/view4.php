<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");

include('header.php');?>

<div class= "content-area">
    <h2>View 4</h2>
    <table>
      
    <tr id="table-header">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Sex</th>
            <th>Loan ID</th>
            <th>Date Loaned</th>
        </tr>
     
    <!-- This contains the methods for views -->
    <?php

    header("Access-Control-Allow-Orgin: *");
    include('../models/Members.php');
    include('../config/Database.php');

//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();
$member = new Members($db);

//sql query to insert data
//Select Table
$query="SELECT * FROM `view 4`";

$stmt = $db->prepare($query);

// Bind ID

// Execute query
$stmt->execute();


//get row count
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // Select required rows to be displayed for view 4
        $member_item = array(
            'M_FName' => $M_FName,
            'M_LName' => $M_LName,
            'M_Email' => $M_Email,
            'M_Address' => $M_Address,
            'M_Sex' => $M_Sex,
            'Loan_Id'=>$Loan_Id,
            'Date_Loaned' => $Date_Loaned,
        );
echo "<tr><td>".$M_FName."</td><td>".$M_LName."</td><td>".$M_Email."</td><td>".$M_Address."</td><td>".$M_Sex."</td><td>".$Loan_Id."</td><td>".$Date_Loaned."</td></tr>";

    }
} else {
    echo "<h1>There are 0 rows</h1>";
}

?>
</table>
</div>
</body>