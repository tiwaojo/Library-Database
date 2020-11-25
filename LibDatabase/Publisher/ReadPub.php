<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
//header("Access-Control-Allow-Orgin: *");
//header("Content-Type: application/json");


include_once './models/Publisher.php';
//include('./config/Database.php');

//instantiate and connect to DB
//$database = new LibraryDatabase();
//$db = $database->connect();
class PublisherRead extends Publisher
{

  function __construct($db)
  {
    // code...
     parent::__construct($db);
  }
  public function getPublisherTable(){
    $res=parent::read();
    return $res;
  }
  public function getPublisherColumn($id){
    $res=parent::readId($id);
    return $res;
  }
  public function printPublisherColumnTable($response)
  {
    // code...
    $num=$response->rowCount();
    if ($num > 0) {
        $Publisher_arr = array();
        $Publisher_arr['data'] = array();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            extract($row);


            $Publisher_item = array(
                '$Publisher_Id' => $Publisher_Id,
                '$Publisher_Name' => $Publisher_Name,
                '$Publisher_Address' => $Publisher_Address,
            );

    echo "<tr><td>".$Publisher_Name."</td><td>".$Publisher_Id."</td><td>".$Publisher_Address."</td></tr>";
    return $row;
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
        print "<h1>There are 0 rows</h1>";
    }
  }

}




















// $publisher = new Publisher($db);
//
// //blog post query
// $res = $publisher->read();
//
// //get row count
// $num = $res->rowCount();
//
// if ($num > 0) {
//     $Publisher_arr = array();
//     $Publisher_arr['data'] = array();
//
//     while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
//         extract($row);
//
//
//         $Publisher_item = array(
//             '$Publisher_Id' => $Publisher_Id,
//             '$Publisher_Name' => $Publisher_Name,
//             '$Publisher_Address' => $Publisher_Address,
//         );
//
// echo "<tr><td>".$Publisher_Name."</td><td>".$Publisher_Id."</td><td>".$Publisher_Address."</td></tr>";
// // echo $row["Members_Id"];
//         //push data
//         // array_push($member_arr['data'], $member_item);
//     }
//     //turn to json & output
//     // echo json_encode($member_arr);
// } else {
//     // echo json_encode(
//     //     array("message" => 'No posts Found')
//     // );
//     echo "<h1>There are 0 rows</h1>";
// }
?>
