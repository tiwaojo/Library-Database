<?php
include_once('../models/loaned_book.php');

class loaned_bookRead extends loaned_book
{

  function __construct($db)
  {//construct func tht ref parents constrcut func to connect to db
    // code...
     parent::__construct($db);
  }
  //get functions for table and column of table that reference parents functions
  public function getloaned_bookTable(){
    $res=parent::read();
    return $res;
  }
  public function getloaned_bookColumn($id){
    $res=parent::readId($id);
    return $res;
  }
    //prints table
  public function printloaned_bookColumnTable($response)
  {
    // code...
    $num=$response->rowCount();//gets row coun
    if ($num > 0) {
        $loaned_book_arr = array();//makes assoc array for table
        $loaned_book_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {//feeds table data into assoc arr
            extract($row);
            $loaned_book_item = array(
                'Loan_Id' => $Loan_Id,
                'ISBN'=>$ISBN,
                'Members_Id'=>$Members_Id,
                'Date_Loaned'=>$Date_Loaned,
                'Loan_Status'=>$Loan_Status,
                'Due_Date'=>$Due_Date
            );
//prints table
    print "<tr><td>".$Loan_Id."</td><td>".$ISBN."</td><td>".$Members_Id."</td><td>".$Date_Loaned."</td><td>".$Loan_Status."</td><td>".$Due_Date."</td></tr>";
    return $row;

        }

    } else {
        print "<h1>There are 0 rows</h1>";
    }
  }

}
