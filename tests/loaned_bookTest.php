<?php
use PHPUnit\Framework\TestCase;
class bookTest extends TestCase{
    public function testReturnsbookName(){
        require "models/loaned_book.php";
        require "config/Database.php";
        $database = new LibraryDatabase();
        $db = $database -> connect();


        $l_book = new loaned_book($db);

        $l_book-> ISBN = 111;
        $l_book-> Loan_Id = 2434;
        $l_book-> Members_Id = 322;
        $l_book-> Loan_Status = 0;
        $l_book-> Due_Date = 100;
        
        $expected = "111 2434 322 0 100"; 
        $this-> assertEquals($expected, $l_book->getLoanerBookDetails());
    }
}