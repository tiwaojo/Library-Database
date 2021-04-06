<?php
class Books
{

    // database connection and table name
    private $conn;
    private $table_name="book";

    // object properties
    public $ISBN;
    public $Book_Title;
    public $Publisher_Id;
    public $Genre_Id;
    public $Library_Id;
    public $Author_Id;


// constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;        
    }

    //reads and returns all books
    public function read()
    {
        //sql query to select all data from book table
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;       
    }

    //reads and returns a resquested book 
    public function readId($id)
    {
        //sql query to select all data from book table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE ISBN = ".$id;

        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;
    }
}
