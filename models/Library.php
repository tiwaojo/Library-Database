<?php
class Library
{

    // database connection and table name
    // private $conn;
    // private $table_name = "products";
    private $conn;
    private $table_name="library";

    public $Library_Id;
    public $Library_Name;
    public $Library_Address;



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
        //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   // set properties
    //   $this->id = $row['id'];
    //   $this->name = $row['name'];
    }

    //constructor

    // TODO Create queries to get data here

    // // constructor with $db as database connection
    // public function __construct($db){
    //     $this->conn = $db;
    // }
}