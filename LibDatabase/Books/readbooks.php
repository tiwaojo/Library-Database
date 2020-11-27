<?php
$servername = "localhost";
$username = "root";
$password = "qwer1234";
$dbname = "librarydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ISBN, Book_Title, Author_Id, Genre_Id FROM book";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

if ($result->num_rows > 0) {
  echo "<table><tr><th>ISBN</th><th>Book Name</th><th>Author_Id</th><th>Genre Id</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ISBN"]."</td><td>".$row["Book_Title"]."</td><td> ".$row["Author_Id"]."</td><td> ".$row["Genre_Id"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
