<?php
header('Access-Control-Allow-Origin: *');

  header('Access-Control-Allow-Methods: POST');//allows for post method



$mysqli=new mysqli("localhost", "root", "admin", "libdatabase");//connection to database




$M_Email=isset($_POST['email'])?$_POST['email']:die("Error: The data you have requested is not available ");//grab email from textfield anf error check empty field

$M_Password=isset($_POST['password'])?$_POST['password']:die("Error: The data you have requested is not available ");//grab paassword from textfield and error check empty field

//if password field is empty fill the email field again and remove the password
$result =$mysqli->query("SELECT * FROM members WHERE M_Email= '".$M_Email."' AND M_Password='".$M_Password."' LIMIT 1");//return 1 if there is a member in the databse with matching fields

  // If the input from the user matches the data collected from the database access is granted to the user and a welcome page and users images are displayed.
  // Else not correct, a message will be displayed for the user to try again
  if (mysqli_num_rows($result) == 1) {

      header("Location: /Library-Database/index");
  }else{
    header("Location: ../views/signin.php?error=invalidfields=".$M_Email);
  }
?>
