<?php
class Publisher
{

    // database connection and table name
    private $conn;
    private $table_name="publisher";

    public $Publisher_Id;
    public $Publisher_Name;
    public $Publisher_Address;


// constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }

    //reads and returns all publishers
    public function read()
    {
         //sql query to select all data from publisher table
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute query and return results
        $stmt->execute();
        return $stmt;
    }

    //reads and returns the Authors with requested publisher_Id
    public function readId($id)
    {
        //sql query to select all data from publisher table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE Publisher_Id = ".$id;

        //prepare for execution
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();
        return $stmt;
    }
}
