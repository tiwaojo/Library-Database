<?php
use PHPUnit\Framework\TestCase;
class employeesTest extends TestCase{
    public function testReturnsEmployeesName(){
        require "models/employees.php";
        require "config/Database.php";
        $database = new LibraryDatabase();
        $db = $database -> connect();


        $employee = new Employee($db);

        $employee-> Employees_Id = 111;
        $employee-> E_FName = "Aryan";
        $employee-> E_LName = "Desai";
        $employee-> E_Email = "Canada";
       
        $expected = "111 Aryan Desai Canada"; 
        $this-> assertEquals($expected, $employee->getEmployeeDetails());
    }
}