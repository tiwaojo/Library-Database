<?php
class Employee
{

    // database connection and table name
    private $conn;
    private $table_name ="employees";

    // object properties
    public $Employees_Id;
    public $E_FName;
    public $E_LName;
    public $E_BDate;
    public $E_Email;
    public $E_Address;
    public $E_Username;
    public $E_Password;
    public $Library_Id;

    
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //reads and returns all Employees
    public function read()
    {
        $this->table_name="employees";
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute query and return results
        $stmt->execute();
        return $stmt;
    }

    //reads and returns the Authors with requested Autor_Id
    public function readId($id)
    {
        //sql query to select all data from emloyee table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE Employee_Id = ".$id;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;
    }

    public function getEmployeeDetails(){
        return $this->Employees_Id. " ". $this->E_FName. " " .$this->E_LName." " .$this->E_Email;
    }
}
