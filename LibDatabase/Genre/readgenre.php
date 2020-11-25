<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
//header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");


include_once './models/Genre.php';
class GenreRead extends Genre
{

  function __construct($db)
  {
    // code...
     parent::__construct($db);
  }
  public function getGenreTable(){
    $res=parent::read();
    return $res;
  }
  public function getGenreColumn($id){
    $res=parent::readId($id);
    return $res;
  }
  public function printGenreColumnTable($response)
  {
    // code...
    $num=$response->rowCount();
    if ($num > 0) {
        $Genre_arr = array();
        $Genre_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $Genre_item = array(
                'Genre_Id' => $Genre_Id,
                'Genre_Name'=>$Genre_Name,

            );

    print "<tr><td>".$Genre_Id."</td><td>".$Genre_Name."</td></tr>";
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
