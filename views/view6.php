
    <!-- This contains the methods for views -->
<?php

// header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');?>

<div class= "content-area">
    <h2>View 6</h2>
    <table>    
    <tr id="table-header">
            <th>ISBN</th>
            <th>Book</th>
            <th>Genre</th>
        </tr>
     

<!-- This contains the methods for views -->
<?php

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


include('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

// $employee = new Employee($db);
$query = "SELECT * FROM `find all horror books`";
       
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
            // 'Publisher_Id' => $Publisher_Id,            
            'Genre_Name' => $Genre_Name, 
        );
echo "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Genre_Name."</td></tr>";
// echo $row["employees_Id"];
        //push data
    //    array_push($view_arr['data'], $view_item);
    }
    //turn to json & output as JSON PREETY PRINT
    // echo json_encode($view_arr,JSON_PRETTY_PRINT);
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