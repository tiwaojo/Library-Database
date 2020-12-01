<?php


header('Access-Control-Allow-Origin: *');

  header('Access-Control-Allow-Methods: POST');


include('../models/Members.php');
include('../config/Database.php');




$mysqli=new mysqli("localhost", "root", "admin", "libdatabase");//sqli database connection



$M_FName=isset($_POST['fname'])?$_POST['fname']:die("Error: The data you have requested is not available ");//line 19 to 27 grabs the test inside the textfield and sendsit using the post method
$M_LName=isset($_POST['lname'])?$_POST['lname']:die("Error: The data you have requested is not available ");
$M_BDate=isset($_POST['bdate'])?$_POST['bdate']:die("Error: The data you have requested is not available ");
$M_Email=isset($_POST['email'])?$_POST['email']:die("Error: The data you have requested is not available ");
$M_Phone=isset($_POST['phone'])?$_POST['phone']:die("Error: The data you have requested is not available ");
$M_Address=isset($_POST['streetAddone'])?$_POST['streetAddone']:die("Error: The data you have requested is not available ");
$M_Sex=isset($_POST['sex'])?$_POST['sex']:die("Error: The data you have requested is not available ");
$M_Username=isset($_POST['username'])?$_POST['username']:die("Error: The data you have requested is not available ");
$M_Password=isset($_POST['password'])?$_POST['password']:die("Error: The data you have requested is not available ");



  $result =$mysqli->query("SELECT * FROM members WHERE M_Email= '".$M_Email."' AND M_Password='".$M_Password."' LIMIT 1");
/
  if (mysqli_num_rows($result) > 0) {
      echo "An account exists with these credentials";//checks if account already exists
  } else {
      $insert_query="INSERT INTO members (M_MemberM_FName, M_LName, M_BDate, M_Email, M_Address, M_Sex, M_Username, M_Password, M_PNumber)
      VALUES (

      '".$M_FName."','"
      .$M_LName."','"
      .$M_BDate."','"
      .$M_Email."','"
      .$M_Address."','"
      .$M_Sex."','"
      .$M_Username."','"
      .$M_Password."','"
      .$M_Phone."')";
      //query for adding the member into the database






      $result=$mysqli->query($insert_query);//sends sql query 

      //takes us back to intended page after execution
        header("Location: ../index.php?signup=success");

  }
