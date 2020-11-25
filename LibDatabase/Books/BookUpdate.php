
<?php
header("Access-Control-Allow-Orgin: *");
 class BookUpdate
 {
   private $conn;
   private $table_name="book";

   public $ISBN;
   public $Book_Title;
   public $Publisher_Id;
   public $Genre_Id;
   public $Library_Id;
   public $Author_Id;
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
       if (isset($POST['Book_Title'])){
         $Book_Title=$_POST['Book_Title'];
         $SetState.="Book_Title = ' $Book_Title' ";
       }

       if (isset($POST['BooksIdSelect'])){
        $ISBN=$_POST['BooksIdSelect'];
        $SetState.='WHERE ISBN = '.$ISBN;
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
?>
