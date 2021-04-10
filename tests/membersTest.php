<?php
use PHPUnit\Framework\TestCase;
class membersTest extends TestCase{
    public function testReturnsMembersName(){
        require "models/members.php";
        require "config/Database.php";
        $database = new LibraryDatabase();
        $db = $database -> connect();


        $member = new Members($db);

        $member-> Members_Id = 111;
        $member-> M_FName = "Tanzir";
        $member-> M_LName = "Hossain";
        $member-> M_Email = "tanzirhossain@library.net";
       
        $expected = "111 Tanzir Hossain tanzirhossain@library.net"; 
        $this-> assertEquals($expected, $member->getMemberDetails());
    }
}