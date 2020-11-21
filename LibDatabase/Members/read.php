<?php
//reads our data from the model and displays in JSON

//headers
//Thois is to allow others to gain access to our api. i.e. only specific tokens(people) can access our api.
//In this case the '*' gives everyone access t access to
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json");

include_once "../config/Database.php";
include_once "../models/Members.php";

//instantiate and connect to DB
$database=new Database();
$db=$database->connect();

$member=new Member($db);

//blog post query
$res=$member->read();

//get row count
$num=$result->rowCount();

if ($num>0) {
    $member_arr=array();
    $member_arr['data']=array();

    while ($row=$result->fetch(PDO::FETCH_ACSSOC)) {
        extract($row);
    

        $member_item=array(
        
'Members_Id'=>$Members_Id,
'M_FName'=>$M_FName,
'M_LName'=>$M_LName,
'M_BDate'=>$M_BDate,
'M_Email'=>$M_Email,
'Address'=>$Address,
'M_Sex'=> $M_Sex,
'M_Username'=>$M_Username,
'M_Password'=> $M_Password,
    );

        //push data
        array_push($member_arr['data'], $member_item);
    }
    //turn to json & output
    echo json_encode($member_arr);
} else {
    echo json_encode(
        array("message"=>'No posts Found')
    );
}
