<?php
class Author
{

    // database connection and table name
    private $conn;
    private $table_name="author";

    // object properties
    public $Author_Id;
    public $A_FName;
    public $A_LName;
    public $A_BDate;
    public $A_Country;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }
    
    //reads and returns all authors
    public function read()
    {
        //sql query to select all data from author table
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;
    }
    
    //reads and returns the Authors with requested Autor_Id
    public function readId($id)
    {
        //sql query to select all data from author table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE Author_Id = ".$id;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;
    }
}