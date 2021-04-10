<?php
//uses PHPUnit frame work in order to conduct unit tests
use PHPUnit\Framework\TestCase;
class employeesTest extends TestCase{
    public function testReturnsEmployeesName(){
        require "models/employees.php";
        require "config/Database.php";

        //Database connection
        $database = new LibraryDatabase();
        $db = $database -> connect();

        //create test employee object
        $employee = new Employee($db);

        $employee-> Employees_Id = 111;
        $employee-> E_FName = "Aryan";
        $employee-> E_LName = "Desai";
        $employee-> E_Email = "Aryan.Desai@library.net";
       
        //compare the expected return vs the actual result.
        $expected = "111 Aryan Desai Aryan.Desai@library.net"; 
        $this-> assertEquals($expected, $employee->getEmployeeDetails());
    }
}