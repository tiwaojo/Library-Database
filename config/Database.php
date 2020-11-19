<!-- file used for connecting to the database. -->
<?php
Class LibraryDatabase{

private $host;
private $port;
private $socket;
private $user;
private $password;//could be protected/static
private  $dbname;
private $con;


public function connect(){
// Constructor to connect to our DB

$this->host="localhost";
$this->port=3306;
$this->socket="";
$this->user="root";
$this->password="tarzan114";
$this->dbname="librarydatabase";
$this->charset="utf8mb4";


try {
	$pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<h1>connected</h1>";
	return $pdo;
} catch (\Exception $e) {
	echo "Connection failed: ".$e->getMessage();
}

}
}
?>
