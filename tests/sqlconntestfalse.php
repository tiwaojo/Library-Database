<?php

use PHPUnit\Framework\TestCase;
class sqlconntestfalse extends TestCase{
   
    
    public function testsqlnumrows()
    {
        
         $mysqli=new mysqli("localhost", "root", "qwer1234", "librarydatabase");//sets up connection to database

        
        $expected = true;//sets the expected value to true
        $actual = $mysqli -> connect_errno;//actual value of sqli connection 
        $this->assertTrue($actual == $expected);// checks if the connection is succesful

    }
}






    