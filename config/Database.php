<!-- file used for connecting to the database. -->
<?php
Class LibraryDatabase{

private $host;
private $port;
private $socket;
private $user;
private $password;//could be protected/static
private  $dbname;



public function connect(){
// Constructor to connect to our DB

$this->$host="localhost";
$this->$port=3306;
$this->$socket="";
$this->$user="root";
$this->$password="admin";
$this->$dbname="librarydatabase";


$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
}
}
//$con->close();
// printf("Library Database");


?>
<h1>librarydatabase</h1>