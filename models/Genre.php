<?php
class Genre
{

    // database connection and table name
    private $conn;
    private $table_name="genre";

    public $Genre_Id;
    public $Genre_Name;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }
    
    //reads and returns all genres
    public function read()
    {
        //sql query to select all data from gnere table
        $query="SELECT * FROM ".$this->table_name;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute and return queryresults
        $stmt->execute();
        return $stmt;
    }

    //reads and returns the genres with requested genre_Id
    public function readId($id)
    {
        //sql query to select all data from genre table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE Genre_Id = ".$id;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute and return query results
        $stmt->execute();
        return $stmt;
    }
}
