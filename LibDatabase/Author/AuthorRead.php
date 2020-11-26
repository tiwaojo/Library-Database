<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
// header("Access-Control-Allow-Orgin: *");
//header("Content-Type: application/json");
//instantiate and connect to DB
//include('./config/Database.php');

//instantiate and connect to DB
//$database = new LibraryDatabase();
//$db = $database->connect();
/**
 *
 */
header("Access-Control-Allow-Orgin: *");
include('C:\wamp64\www\GitHub\Library-Database\models\Author.php');
 class AuthorRead Extends Author
 {
   public function __construct($db)
   {
       parent::__construct($db);
   }
     // database connection and table name
     // private $conn;
     // private $table_name = "products";
     public function printAuthorTable($response){

     }
     public function printAuthorColumnTable($response){
       $num=$response->rowCount();
       if ($num > 0) {
           $library_arr = array();
           $library_arr['data'] = array();

           while ($row = $response->fetch(PDO::FETCH_ASSOC)) {
               extract($row);
               $Library_item = array(
                   'Author_Id' => $Author_Id,
                   'A_FName'=>$A_FName,
                   'A_LName'=>$A_LName,
                   "A_BDate"=>$A_BDate,
                   "A_Country"=>$A_Country
               );

       print "<tr><td>".$Author_Id."</td><td>".$A_FName."</td><td>".$A_LName."</td><td>".$A_BDate."</td><td>".$A_Country."</td></tr>";
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
     public function getAuthorTable(){
       $res=parent::read();
       return $res;
     }
     public function getAuthorColumn($id){
       $res=parent::readId($id);
       return $res;
     }


         //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

     //   // set properties
     //   $this->id = $row['id'];
     //   $this->name = $row['name'];
     }






//old method
