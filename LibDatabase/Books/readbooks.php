<?php

include_once('../config/Database.php');


//instantiate and connect to DB
$database = new LibraryDatabase();
$conn = $database->connectsqli();// Create connection

//sql statement to select columns from author table
$sql = "SELECT ISBN, Book_Title, Author_Id, Genre_Id FROM book";
//executes statement
$result = $conn->query($sql);//exexutes tbale
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}//if statement stating that its a connection error
//if table is there then it will echo a table for some book variables
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
