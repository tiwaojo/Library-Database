<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
//header("Content-Type: application/json");


include('./models/Library.php');
//include('./config/Database.php');

//instantiate and connect to DB
//$database = new LibraryDatabase();
//$db = $database->connect();

$library = new Library($db);

//blog post query
$res = $library->read();

//get row count
$num = $res->rowCount();

if ($num > 0) {
    $library_arr = array();
    $library_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $Library_item = array(
            'Library_Id' => $Library_Id,
            'Library_Name'=>$Library_Name,
            '$Library_Address'=>$Library_Address
        );

echo "<tr><td>".$Library_Id."</td><td>".$Library_Name."</td><td>".$Library_Address."</td></tr>";
// echo $row["librarys_Id"];
        //push data
        // array_push($library_arr['data'], $library_item);
    }
    //turn to json & output
    // echo json_encode($library_arr);
} else {
    // echo json_encode(
    //     array("message" => 'No posts Found')
    // );
    echo "<h1>There are 0 rows</h1>";
}