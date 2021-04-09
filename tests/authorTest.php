<?php
use PHPUnit\Framework\TestCase;
class authorTest extends TestCase{
    public function testReturnsAuthorName(){
        require "models/Author.php";
        require "config/Database.php";
        $database = new LibraryDatabase();
        $db = $database -> connect();


        $author = new Author($db);

        $author-> Author_Id = 111;
        $author-> A_FName = "Tiwa";
        $author-> A_LName = "Ojo";
        $author-> A_Country = "Canada";
       
        $expected = "111 Tiwa Ojo Canada"; 
        $this-> assertEquals($expected, $author->getAuthorDetails());
    }
}