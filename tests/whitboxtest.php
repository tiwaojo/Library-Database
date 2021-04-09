<?php

use PHPUnit\Framework\TestCase;
class whiteboxtest extends TestCase{
   
    
    public function testsqlnumrows()
    {
        
         $mysqli=new mysqli("localhost", "root", "qwer1234", "librarydatabase");//sets up database connection

        
        $M_Email="ornare.lectus.ante@tellusPhaselluselit.edu";//sets the email to one in the database


        $M_Password = "Utzdfgvear";//sets the password to one in the database
        
        $result =$mysqli->query("SELECT * FROM members WHERE M_Email= '".$M_Email."' AND M_Password='".$M_Password."' LIMIT 1");//setup the database query
        
        $this->assertTrue(mysqli_num_rows($result) == 1);//checks if there is a value in the database matching the email and password

    }
}
?>





    