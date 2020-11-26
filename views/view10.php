
<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');?>


<div class= "content-area">
    <h2>View 10</h2>
    <table>
    
        <tr id="table-header">
            <th>ISBN</th>
            <th>Book</th>
            <th>Publisher_Id</th>
            <th>Genre_Id</th>


        </tr>
     

<?php

// include_once('E:\wamp64\www\Library-Database\models\employees\s.php');
// include_once('E:\wamp64\www\Library-Database\config\Database.php');
include('../models/Employees.php');


include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $employee = new Employee($db);
$query = "SELECT * FROM `view 10`";
       
       $stmt = $db->prepare($query);
        // $stmt->bindParam(1, $this->id);
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


        $view_item = array(
            'ISBN' => $ISBN,
            'Book_Title' => $Book_Title,
            'Publisher_Id' => $Publisher_Id,            
            'Genre_Id' => $Genre_Id, 
        );
echo "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Publisher_Id."</td><td>".$Genre_Id."</td></tr>";
// echo $row["employees_Id"];
    //     //push data
    //    array_push($view_arr['data'], $view_item);
    }
    //turn to json & output
    // echo json_encode($view_arr);
} else {
    // echo json_encode(
    //     array("message" => 'No posts Found')
    // );
    echo "<h1>There are 0 rows</h1>";
}
?>
</table>
</div>
</body>