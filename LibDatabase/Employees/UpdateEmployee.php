
<?php
 class EmployeeUpdate
 {
   private $conn;
   private $table_name="employees";

   public $Employees_Id;
   public $E_FName;
   public $E_LName;
   public $E_BDate;
   public $E_Email;
   public $E_Address;
   // private $E_Sex;
   public $E_Username;
   public $E_Password;
   public $Library_Id;
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
       if (isset($POST['E_FName'])){
        $E_FName=$_POST['E_FName'];
        $SetState.="E_FName = '$E_FName' ,";
       }
       if (isset($POST['E_LName'])){
        $E_LName=$_POST['E_LName'];
        $SetState.="E_LName = '$E_LName' ,";
       }
       if (isset($POST['E_BDate'])){
        $E_BDate=$_POST['E_BDate'];
        $SetState.="E_BDate = '$E_BDate 00:00:00',";
       }
       if (isset($POST['E_Email'])){
        $E_Email=$_POST['E_Email'];
        $SetState.="E_Email = '.$E_Email' ,";
       }
       if (isset($POST['E_Address'])){
        $E_Address=$_POST['E_Address'];
        $SetState.="E_Address = '$E_Address' ,";
       }
       if (isset($POST['E_Username'])){
        $E_Username=$_POST['E_Username'];
        $SetState.="E_Username = '.$E_Username' ,";
       }
       if (isset($POST['E_Password'])){
        $E_Password=$_POST['E_Password'];
        $SetState.="E_Password = '.$E_Password' ";
       }
       if (isset($POST['Employees_Id'])){
         $Employees_Id=$_POST['Employees_Id'];
         $SetState.="WHERE Employees_Id' = '.$Employees_Id'' ,";
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
         print"make new password";
       }

     }




  }
?>
