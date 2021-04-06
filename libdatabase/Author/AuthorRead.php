<?php

header("Access-Control-Allow-Orgin: *");
include('../models/Author.php');
 class AuthorRead Extends Author//made a parent and child class so that we can use the models
 {
   public function __construct($db)//construct to connect the parents func to conn to DB
   {
       parent::__construct($db);
   }
     public function printAuthorColumnTable($response){//used to print the author column table
       $num=$response->rowCount();//gets number of rows from author table
       if ($num > 0) {//if table is filled
           $library_arr = array();//make array for author
           $library_arr['data'] = array();

           while ($row = $response->fetch(PDO::FETCH_ASSOC)) {
               extract($row);
               $Library_item = array(//makes assoc array for author
                   'Author_Id' => $Author_Id,
                   'A_FName'=>$A_FName,
                   'A_LName'=>$A_LName,
                   "A_BDate"=>$A_BDate,
                   "A_Country"=>$A_Country
               );

       print "<tr><td>".$Author_Id."</td><td>".$A_FName."</td><td>".$A_LName."</td><td>".$A_BDate."</td><td>".$A_Country."</td></tr>";//prints table for author
       return $row;
           }
       } else {
           print "<h1>There are 0 rows</h1>";
       }
     }
     public function getAuthorTable(){//functions for getting author table and column
       $res=parent::read();
       return $res;
     }
     public function getAuthorColumn($id){
       $res=parent::readId($id);
       return $res;
     }

     }






//old method
