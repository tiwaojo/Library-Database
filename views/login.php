<?php
header('Access-Control-Allow-Origin: *');
//   header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
//   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');



$mysqli=new mysqli("localhost", "root", "admin", "libdatabase");


// $data = json_decode(file_get_contents("php://input"));

//the value requested is set set the value else display an error message
// $Members_Id=isset($_POST['member_Id'])?$_POST['member_Id']:die("Error: The data you have requested is not available ");
// $M_FName=isset($_POST['fname'])?$_POST['fname']:die("Error: The data you have requested is not available ");
// $M_LName=isset($_POST['lname'])?$_POST['lname']:die("Error: The data you have requested is not available ");
// $M_BDate=isset($_POST['bdate'])?$_POST['bdate']:die("Error: The data you have requested is not available ");
$M_Email=isset($_POST['email'])?$_POST['email']:die("Error: The data you have requested is not available ");
// $M_Phone=isset($_POST['phone'])?$_POST['phone']:die("Error: The data you have requested is not available ");
// $M_Address=isset($_POST['streetAddone'])?$_POST['streetAddone']:die("Error: The data you have requested is not available ");
// $M_Sex=isset($_POST['sex'])?$_POST['sex']:die("Error: The data you have requested is not available ");
// $M_Username=isset($_POST['username'])?$_POST['username']:die("Error: The data you have requested is not available ");
$M_Password=isset($_POST['password'])?$_POST['password']:die("Error: The data you have requested is not available ");

//if password field is empty fill the email field again and remove the password
$result =$mysqli->query("SELECT * FROM members WHERE M_Email= '".$M_Email."' AND M_Password='".$M_Password."' LIMIT 1");

  // If the input from the user matches the data collected from the database access is granted to the user and a welcome page and users images are displayed.
  // Else not correct, a message will be displayed for the user to try again
  if (mysqli_num_rows($result) == 1) {
    //   echo "An account exists with these credentials";
      header("Location: ../views/index.php");
  }else{
    header("Location: ../views/signin.php?error=invalidfields=".$M_Email);
  }
?>
