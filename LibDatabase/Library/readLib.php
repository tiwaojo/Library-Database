
<div class="content-area">
    <h2>Display all Libraries</h2>

<?php
include_once('../models/Library.php');
include_once('../config/Database.php');
class LibraryRead extends Library
{

  function __construct($db)
  {//construct func tht ref parents constrcut func to connect to db
    // code...
     parent::__construct($db);
  }
  //get functions for table and column of table that reference parents functions
  public function getLibraryTable(){
    $res=parent::read();
    return $res;
  }
  public function getLibraryColumn($id){
    $res=parent::readId($id);
    return $res;
  }
  //prints table
  public function printLibraryColumnTable($response)
  {
    // code...
    $num=$response->rowCount();//gets row count
    if ($num > 0) {
        $Library_arr = array();//makes assoc array for table
        $Library_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {//feeds table data into assoc arr
            extract($row);
            $Library_item = array(
                'Library_Id' => $Library_Id,
                'Library_Name'=>$Library_Name,
                'Library_Address'=>$Library_Address
            );
//prints table
    echo "<tr><td>".$Library_Id."</td><td>".$Library_Name."</td><td>".$Library_Address."</td></tr>";
    return $row;
        }
    } else {
        echo "<h1>There are 0 rows</h1>";
    }
  }

}

?>
</div>


















// include('./config/Database.php');
//
// //instantiate and connect to DB
// $database = new LibraryDatabase();
// $db = $database->connect();
//
// $library = new Library($db);
//
// //blog post query
// $res = $library->read();
//
// //get row count
// $num = $res->rowCount();
//
// if ($num > 0) {
//     $library_arr = array();
//     $library_arr['data'] = array();
//
//     while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
//         extract($row);
//         $Library_item = array(
//             'Library_Id' => $Library_Id,
//             'Library_Name'=>$Library_Name,
//             '$Library_Address'=>$Library_Address
//         );
//
// echo "<tr><td>".$Library_Id."</td><td>".$Library_Name."</td><td>".$Library_Address."</td></tr>";
// // echo $row["librarys_Id"];
//         //push data
//         // array_push($library_arr['data'], $library_item);
//     }
//     //turn to json & output
//     // echo json_encode($library_arr);
// } else {
//     // echo json_encode(
//     //     array("message" => 'No posts Found')
//     // );
//     echo "<h1>There are 0 rows</h1>";
// }
