<?php

include_once('../models/Publisher.php');

class PublisherRead extends Publisher
{
    //construct func tht ref parents constrcut func to connect to db
    public function __construct($db)
    {
        // code...
        parent::__construct($db);
    }
    //get functions for table and column of table that reference parents functions
    public function getPublisherTable()
    {
        $res=parent::read();
        return $res;
    }
    public function getPublisherColumn($id)
    {
        $res=parent::readId($id);
        return $res;
    }
    //prints table
    public function printPublisherColumnTable($response)
    {
        // code...
    $num=$response->rowCount();//gets row count
    if ($num > 0) {
        $Publisher_arr = array();//makes assoc array for table
        $Publisher_arr['data'] = array();

        while ($row = $response->fetch(PDO::FETCH_ASSOC)) {//feeds table data into assoc arr
            extract($row);


            $Publisher_item = array(
                '$Publisher_Id' => $Publisher_Id,
                '$Publisher_Name' => $Publisher_Name,
                '$Publisher_Address' => $Publisher_Address,
            );
            //prints table
            echo "<tr><td>".$Publisher_Name."</td><td>".$Publisher_Id."</td><td>".$Publisher_Address."</td></tr>";
            return $row;
        }
    } else {
        print "<h1>There are 0 rows</h1>";
    }
    }
}