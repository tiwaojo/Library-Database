<?php
//uses PHPUnit frame work in order to conduct unit tests
use PHPUnit\Framework\TestCase;
class authorTest extends TestCase{
    public function testReturnsAuthorName(){
        require "models/Author.php";
        require "config/Database.php";

        //Database connection
        $database = new LibraryDatabase();
        $db = $database -> connect();

        //create test author object
        $author = new Author($db);

        $author-> Author_Id = 111;
        $author-> A_FName = "Tiwa";
        $author-> A_LName = "Ojo";
        $author-> A_Country = "Canada";
       
        //compare the expected return vs the actual result.
        $expected = "111 Tiwa Ojo Canada"; 
        $this-> assertEquals($expected, $author->getAuthorDetails());
    }
}