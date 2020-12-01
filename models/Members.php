<?php
class Members
{

    // database connection and table name
    private $conn;
    private $table_name="members";

    public $Members_Id;
    public $M_FName;
    public $M_LName;
    public $M_BDate;
    public $M_Email;
    public $M_Phone;
    public $M_Address;
    public $M_Sex;
    public $M_Username;
    public $M_Password;


// constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn=$db;
    }
 
    //reads and returns all members
    public function read()
    {
        //sql query to insert data
        $query="SELECT * FROM ".$this->table_name;

        //prepare query for execution
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();
        return $stmt;
    }

    //reads and returns the members with requested Members_Id
    public function readId($id)
    {
             //sql query to select all data from members table with matching id
        $query="SELECT * FROM ".$this->table_name." WHERE $this->Members_Id = ".$id;

        //prepare the query for execution
        $stmt = $this->conn->prepare($query);

        // Execute and return results
        $stmt->execute();
        return $stmt;        
    }
}
