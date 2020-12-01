<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
include('header.php');?>

<div class= "content-area">
    <h2>View 5</h2>
    <table>
    <tr id="table-header">
            <th>Member ID</th>
        </tr>
<?php

include('../models/Members.php');
include('../config/Database.php');

//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

//Select Table
$query = "SELECT * FROM `nestedqueryunion`";

//blog post query
$stmt = $db->prepare($query);
$stmt->execute();
$num = $stmt->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // Select required rows to be displayed for view 5
        $member_item = array(
             'Members_Id' => $Members_Id,
        );
  echo "<tr><td>".$Members_Id."</td></tr>";

    }

} else {

    echo "<h1>There are 0 rows</h1>";
}

?>
</table>
</div>
</body>