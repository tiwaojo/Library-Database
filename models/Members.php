<?php
class Members
{
  
    // database connection and table name
    // private $conn;
    // private $table_name = "products";
    private $conn;
    private $table_name="members";

    public $Members_Id;
    public $M_FName;
    public $M_LName;
    public $M_BDate;
    public $M_Email;
    public $M_Address;
    public $M_Sex;
    public $M_Username;
    public $M_Password;

    

    public function __construct($db)
    {
        $this->conn=$db;
        // $this->table_name;
    }

    public function read()
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Bind ID
        $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();

        return $stmt;
    }
    
    public function view4()
    {
        // $this->table_name="employees `at` library 1";

        $query = "SELECT * FROM `view 4`";
       
       $stmt = $this->conn->prepare($query);
        // $stmt->bindParam(1, $this->id);
        $stmt->execute();
        // if ($stmt = $this->conn->prepare($query)) {
            // $stmt->execute();
            // $stmt->bind_result(3,$this->Employees_Id, $this->E_FName,$this->E_LName);
            // while ($stmt->fetch()) {
            //     printf("%s, %s\n", $this->Employees_Id, $this->E_FName, $this->E_LName);
            //     echo "<h1>".$this->Employees_Id."</h1>";
            //     echo "<h1>".$this->E_FName."</h1>";
            //     echo "<h1>".$this->E_LName."</h1>";
            // }
        //     $stmt->close();
        // }
       

        return $stmt;
        // return $stmt;
    }
    
}
