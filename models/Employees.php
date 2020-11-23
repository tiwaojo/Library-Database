<?php
class Employee{
  
    // database connection and table name
    private $conn;
    private $table_name ;
  
    public $Employees_Id;
    public $E_FName;
    public $E_LName;
    public $E_BDate;
    public $E_Email;
    // public $E_Address;
    // private $E_Sex;
    private $E_Username;
    public $E_Password;

    // TODO Create queries to get data here
  
    // // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    public function read()
    {
        $this->table_name="employees";
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Bind ID
        // $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    public function view1()
    {
        // $this->table_name="employees `at` library 1";

        $query = "SELECT * FROM `employees at library 1`";
       
       $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();
        
        return $stmt;
        // return $stmt;
    }
}
?>