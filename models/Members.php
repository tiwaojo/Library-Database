<?php
class Members{
  
    // database connection and table name
    // private $conn;
    // private $table_name = "products";
  
    public $Members_Id;
    public $M_FName;
    public $M_LName;
    public $M_BDate;
    public $M_Email;
    public $Address;
    private $M_Sex;
    public $M_Username;
    private $M_Password;

    private $conn;
    private $table_name;

    public function __construct($db){
        $this->conn=$db;
        $this->table_name="members";
    }

public function read(){
    //sql query to insert data
    $query="SELECT * FROM SELECT * FROM librarydatabase.members";

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
?>