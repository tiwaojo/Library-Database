<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


include_once 'C:\wamp64\www\Library-Database/models/Genre.php';
include_once 'C:\wamp64\www\Library-Database/config/Database.php';


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$genre = new Genre($db);

//blog post query
$res = $genre->read();

//get row count
$num = $res->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
            'Genre_Id' => $Genre_Id,
            'Genre_Name' => $Genre_Name,
          
           
        );

echo "<tr><td>".$Genre_Id."</td><td>".$Genre_Name."</td></tr>";
// echo $row["Members_Id"];
        //push data
        // array_push($member_arr['data'], $member_item);
    }
    //turn to json & output
    // echo json_encode($member_arr);
} else {
    // echo json_encode(
    //     array("message" => 'No posts Found')
    // );
    echo "<h1>There are 0 rows</h1>";
}

?>