<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


include_once 'C:\wamp64\www\Library-Database/models/Books.php';
include_once 'C:\wamp64\www\Library-Database/config/Database.php';


//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();

$book = new Books($db);

//blog post query
$res = $book->read();

//get row count
$num = $res->rowCount();
if ($num > 0) {
    $member_arr = array();
    $member_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $member_item = array(
            'ISBN' => $ISBN,
            'Book_Title' => $Book_Title,
            'Publisher_Id' => $Publisher_Id,
            'Genre_Id' => $Genre_Id,
            'Library_Id' => $Library_Id,
            'Author_Id' => $Author_Id,
           
        );

echo "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Author_Id."</td><td>".$Genre_Id."</td></tr>";
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