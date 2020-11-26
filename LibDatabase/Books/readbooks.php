<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");



include_once './models/Books.php';
/**
 *
 */
class BooksRead extends Book
{

  function __construct($db)
  {
    // code...
     parent::__construct($db);
  }
  public function getBookTable(){
    $res=parent::read();
    return $res;
  }
  public function getBookColumn($id){
    $res=parent::readId($id);
    return $res;
  }
  public function printBookColumnTable($response)
  {
    // code...
    $num=$response->rowCount();
    if ($num > 0) {
        $Book_arr = array();
        $Book_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $Book_item = array(
                'ISBN' => $ISBN,
                'Book_Title'=>$Book_Title,
                'Publisher_Id'=>$Publisher_Id,
                'Genre_Id'=>$Genre_Id,
                'Library_Id'=>$Library_Id,
                'Author_Id'=>$Author_Id,
            );

    print "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Publisher_Id."</td><td>".$Genre_Id."</td><td>".$Library_Id."</td><td>".$Author_Id."</td></tr>";
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


// //instantiate and connect to DB
// $database = new LibraryDatabase();
// $db = $database->connect();
//
// $book = new Books($db);
//
// //blog post query
// $res = $book->read();
//
// //get row count
// $num = $res->rowCount();
// if ($num > 0) {
//     $member_arr = array();
//     $member_arr['data'] = array();
//
//     while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
//         extract($row);
//
//
//         $member_item = array(
//             'ISBN' => $ISBN,
//             'Book_Title' => $Book_Title,
//             'Publisher_Id' => $Publisher_Id,
//             'Genre_Id' => $Genre_Id,
//             'Library_Id' => $Library_Id,
//             'Author_Id' => $Author_Id,
//
//         );
//
// echo "<tr><td>".$ISBN."</td><td>".$Book_Title."</td><td>".$Author_Id."</td><td>".$Genre_Id."</td></tr>";
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
