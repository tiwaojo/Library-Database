<?php
class loaned_book
{

    // database connection and table name
    private $conn;
    private $table_name="loaned_book";

    public $Loan_Id;
    public $ISBN;
    public $Members_Id;
    public $Date_Loaned;
    public $Loan_Status;
    public $Due_Date;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }

    //reads an returns all loaned_book
    public function read()
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name;

        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();
        return $stmt;
    }

    //reads and returns the loaned_book with requested loan_Id
    public function readId($id)
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name." WHERE Loan_Id = ".$id;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();
        return $stmt;
    }
}
