<?php
class Library
{
    // database connection and table name
    private $conn;
    private $table_name="library";

    public $Library_Id;
    public $Library_Name;
    public $Library_Address;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }

    //reads and returns all libraries
    public function read()
    {
        //sql query to select all data from author table
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute query and return result
        $stmt->execute();
        return $stmt;        
    }

    //reads and returns the libraries with requested Library_Id
    public function readId($id){
       //sql query to select all data from ibrary table with matching id
      $query="SELECT * FROM ".$this->table_name." WHERE Library_Id = ".$id;

      //prepare the query for execution
      $stmt = $this->conn->prepare($query);

      
      // returns executed query
      $stmt->execute();
      return $stmt;
    }
}
