<?php

include_once('../models/Genre.php');
class GenreRead extends Genre
{

  function __construct($db)//ref parent construct to connect to db
  {
    // code...
     parent::__construct($db);
  }
  public function getGenreTable(){//gets table for genre from parent read func
    $res=parent::read();
    return $res;
  }
  public function getGenreColumn($id){//gets table from genre table from parent readid func
    $res=parent::readId($id);
    return $res;
  }
  public function printGenreColumnTable($response)//print column table
  {
    // code...
    $num=$response->rowCount();//gets num count of rows in table
    if ($num > 0) {
        $Genre_arr = array();//makes assoc array for genre tbale
        $Genre_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {//feeds genre tbale data into assoc array
            extract($row);
            $Genre_item = array(
                'Genre_Id' => $Genre_Id,
                'Genre_Name'=>$Genre_Name,

            );

    print "<tr><td>".$Genre_Id."</td><td>".$Genre_Name."</td></tr>";//print genre tbale
    return $row;
        }

    } else {

        print "<h1>There are 0 rows</h1>";
    }
  }

}



























// $genre = new Genre($db);
//
// //blog post query
// $res = $genre->read();
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
//             'Genre_Id' => $Genre_Id,
//             'Genre_Name' => $Genre_Name,
//
//
//         );
//
// echo "<tr><td>".$Genre_Id."</td><td>".$Genre_Name."</td></tr>";
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
