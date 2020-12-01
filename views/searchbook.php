<?php
header('Access-Control-Allow-Origin: *');

  header('Access-Control-Allow-Methods: POST');



$mysqli=new mysqli("localhost", "root", "admin", "libdatabase");



$Book_Title=isset($_POST['search'])?$_POST['search']:die("Error: The data you have requested is not available ");



//if password field is empty fill the email field again and remove the password
$result =$mysqli->query("SELECT * FROM book WHERE Book_Title= '".$Book_Title."' ");

  // If the input from the user matches the data collected from the database access is granted to the user and a welcome page and users images are displayed.
  // Else not correct, a message will be displayed for the user to try again
  if (mysqli_num_rows($result) == 1) {
    echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
  }


  ?>
