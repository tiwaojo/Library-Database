<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
//header("Content-Type: application/json");


include('./models/loaned_book.php');
//include('./config/Database.php');

//instantiate and connect to DB
//$database = new LibraryDatabase();
//$db = $database->connect();

$loan = new loaned_book($db);

//blog post query
$res = $loan->read();

//get row count
$num = $res->rowCount();

if ($num > 0) {
    $loan_arr = array();
    $loan_arr['data'] = array();

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $loan_item = array(
            'Loan_Id' => $Loan_Id,
            'ISBN'=>$ISBN,
            '$Members_Id'=>$Members_Id,
            'Date_Loaned'=>$Date_Loaned,
            '$Loan_Status'=>$Loan_Status,
            '$Due_Date'=>$Due_Date,
        );

echo "<tr><td>".$Loan_Id."</td><td>".$ISBN."</td><td>".$Members_Id."</td><td>".$Date_Loaned."</td><td>".$Loan_Status."</td><td>".$Due_Date."</td></tr>";
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
