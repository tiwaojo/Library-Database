<?php



    header("Access-Control-Allow-Orgin: *");
     class AuthorUpdate
     {
       //fields for author table
       private $conn;
       private $table_name="author";
       // object properties
       public $Author_Id;
       public $A_FName;
       public $A_LName;
       public $A_BDate;
       public $A_Country;
       public function __construct($db)//connects to db
       {
           $this->conn=$db;
       }
         // database connection and table name
         // private $conn;
         // private $table_name = "products";
         public function getFieldsPost($POST)//function to get which fields user wants to update in
         {
           //this function primarily sets variables used in the set section of the update query
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
         public function Update($State){//returns the update statement and exexutes the update statement
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
    ?>
