<?php
//uses PHPUnit frame work in order to conduct unit tests
use PHPUnit\Framework\TestCase;
class bookTest extends TestCase{
    public function testReturnsbookName(){
        require "models/Books.php";
        require "config/Database.php";

        //Database connection
        $database = new LibraryDatabase();
        $db = $database -> connect();

        //create test book object
        $book = new Books($db);

        $book-> ISBN = 111;
        $book-> Book_Title = "Tester Book";
        $book-> Publisher_Id = 1111;
        $book-> Genre_Id = 4;
        $book-> Library_Id = 10;
        $book-> Author_Id = 100;
        
        //compare the expected return vs the actual result.
        $expected = "Tester Book 111 1111 4 10 100"; 
        $this-> assertEquals($expected, $book->getFullBookDetails());
    }
}