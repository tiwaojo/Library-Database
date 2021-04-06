<?php

header("Access-Control-Allow-Orgin: *");


include('../../models/Employees.php');
class EmployeeRead extends Employee
{

  function __construct($db)//function referencing parent construct func
  {
    // code...
     parent::__construct($db);
  }
  public function getEmployeeTable(){//read employee table from parent read func
    $res=parent::read();
    return $res;
  }
  public function getEmployeeColumn($id){//read employee column from parent read id func
    $res=parent::readId($id);
    return $res;
  }
  public function printBookColumnTable($response)
  {
    // code...
    $num=$response->rowCount();//gets row count of table of query
    if ($num > 0) {//if table has data
        $Employee_arr = array();//makes assoc array of employee arr
        $Employee_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {//feeds employee data into assoc array
            extract($row);
            $Employee_item = array(
                'Employees_Id' => $Employees_Id,
                'E_FName'=>$E_FName,
                'E_LName'=>$E_LName,
                'E_BDate'=>$E_BDate,
                'E_Email'=>$E_Email,
                'E_Username'=>$E_Username,
                'E_Password'=>$E_Password,
                'Library_Id'=>$Library_Id,
            );
//prints assoc array
    print "<tr><td>".$Employees_Id."</td><td>".$E_FName."</td><td>".$E_LName."</td><td>".$E_BDate."</td><td>".$E_Email."</td><td>".$E_Username."</td><td>".$E_Password."</td><td>".$Library_Id."</td></tr>";
    return $row;
        }
    } else {
        print "<h1>There are 0 rows</h1>";
    }
  }

}



?>
