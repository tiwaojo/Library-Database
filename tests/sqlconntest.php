<?php

use PHPUnit\Framework\TestCase;
class sqlconntest extends TestCase{
   
    
    public function testsqlnumrows()
    {
        
         $mysqli=new mysqli("localhost", "root", "qwer1234", "librarydatabase");//sets up connection to database

        
        $expected = false;//sets the expected value to true
        $actual = $mysqli -> connect_errno;//actual value of sqli connection 
        $this->assertTrue($actual == $expected);// checks if the connection is succesful

    }
}






    