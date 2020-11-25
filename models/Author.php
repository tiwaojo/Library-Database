<?php
class Author
{
  

    // database connection and table name
    // private $conn;
    // private $table_name = "products";
    
    public $conn;
    public $table_name="author";
    // object properties
    public $Author_Id;
    public $A_FName;
    public $A_LName;
    public $A_BDate;
    public $A_Country;

    // TODO Create queries to get data here
  
    public function __construct($db)
    {
        $this->conn=$db;
        // $this->table_name;
    }
    // // constructor with $db as database connection
    // public function __construct($db){
    //     $this->conn = $db;
    // }

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
        //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   // set properties
    //   $this->id = $row['id'];
    //   $this->name = $row['name'];
    }
    public function readId($id)
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name." WHERE Author_Id = ".$id;

        $stmt = $this->conn->prepare($query);

        // Bind ID
        $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();
        return $stmt;
        //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   // set properties
    //   $this->id = $row['id'];
    //   $this->name = $row['name'];
    }
    public function UpdateColumn($PostArray)
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name." WHERE Author_Id = ".$id;

        $stmt = $this->conn->prepare($query);

        // Bind ID
        $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();
        return $stmt;
        //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   // set properties
    //   $this->id = $row['id'];
    //   $this->name = $row['name'];
    }
}
