<?php


header('Access-Control-Allow-Origin: *');
//   header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
//   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');


include('../models/Members.php');
include('../config/Database.php');


//instantiate and connect to DB
// $database = new LibraryDatabase();
// $db = $database->connect();

// $member = new Members($db);

$mysqli=new mysqli("localhost", "root", "admin", "libdatabase");


// $data = json_decode(file_get_contents("php://input"));

//the value requested is set set the value else display an error message
// $Members_Id=isset($_POST['member_Id'])?$_POST['member_Id']:die("Error: The data you have requested is not available ");
$M_FName=isset($_POST['fname'])?$_POST['fname']:die("Error: The data you have requested is not available ");
$M_LName=isset($_POST['lname'])?$_POST['lname']:die("Error: The data you have requested is not available ");
$M_BDate=isset($_POST['bdate'])?$_POST['bdate']:die("Error: The data you have requested is not available ");
$M_Email=isset($_POST['email'])?$_POST['email']:die("Error: The data you have requested is not available ");
$M_Phone=isset($_POST['phone'])?$_POST['phone']:die("Error: The data you have requested is not available ");
$M_Address=isset($_POST['streetAddone'])?$_POST['streetAddone']:die("Error: The data you have requested is not available ");
$M_Sex=isset($_POST['sex'])?$_POST['sex']:die("Error: The data you have requested is not available ");
$M_Username=isset($_POST['username'])?$_POST['username']:die("Error: The data you have requested is not available ");
$M_Password=isset($_POST['password'])?$_POST['password']:die("Error: The data you have requested is not available ");

// if($member->create()){
//     echo json_decode()
// }

//checks if the data exists in the table
// $sql = ;

  $result =$mysqli->query("SELECT * FROM members WHERE M_Email= '".$M_Email."' AND M_Password='".$M_Password."' LIMIT 1");
// echo $result;
  // If the input from the user matches the data collected from the database access is granted to the user and a welcome page and users images are displayed.
  // Else not correct, a message will be displayed for the user to try again
  if (mysqli_num_rows($result) > 0) {
      echo "An account exists with these credentials";
      header("Location: ../Library-Database/signup.php?error=invalidfields=".$M_Email);
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



    // //   echo $Members_Id;
    //   echo $M_FName;
    //   echo $M_LName;
    //   echo $M_BDate;
    //   echo $M_Email;
    //   echo $M_Address;
    //   echo $M_Sex;
    //   echo $M_Username;
    //   echo $M_Password;


      $result=$mysqli->query($insert_query);
    //   echo $result;
      //takes us back to intended page after execution
        header("Location: ../Library-Database/index.php?signup=success");
    //   echo "alert(Welcome to the Library)";
  }
