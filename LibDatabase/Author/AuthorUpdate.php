<?php

// header("Access-Control-Allow-Orgin: *");
    // database connection and table name
    // private $conn;
    // private $table_name = "products";


    // // constructor with $db as database connection
    // public function __construct($db){
    //     $this->conn = $db;
    // }


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
     class AuthorUpdate
     {
       private $conn;
       private $table_name="author";
       // object properties
       public $Author_Id;
       public $A_FName;
       public $A_LName;
       public $A_BDate;
       public $A_Country;
       public function __construct($db)
       {
           $this->conn=$db;
       }
         // database connection and table name
         // private $conn;
         // private $table_name = "products";
         public function getFieldsPost($POST)
         {
           $SetState='';
           if (isset($POST['A_FName'])){
             $fname=$_POST['A_FName'];
             $SetState.="A_FName = '$fname' ,";
           }
           if (isset($POST['A_LName'])){
             $lname=$_POST['A_LName'];
             $SetState.="A_LName = '$lname' ,";
           }
           if (isset($POST['A_BDate'])){
             $birthdate=$_POST['A_BDate'];
             $SetState.="A_BDate = '$birthdate 00:00:00',";
           }
           if (isset($POST['A_Country'])){
            $country=$_POST['A_Country'];
            $SetState.="A_Country = '$country' ";
           }
           if (isset($POST['authorIdSelect'])){
            $id=$_POST['authorIdSelect'];
            $SetState.='WHERE Author_Id = '.$id;
           }

           return $SetState;
         }
         public function Update($State){
           $query="UPDATE ".$this->table_name." SET ".$State;
           try{
             $stmt = $this->conn->prepare($query);

             // Bind ID
             $stmt->bindParam(1, $this->id);

             // Execute query
             $stmt->execute();

             return $stmt;
           }catch(\PDOException $e){
             exit($e->getMessage());
           }

         }




      }






    //old method



        //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   // set properties
    //   $this->id = $row['id'];
