<?php
  //header("Content-Type: application/json");


  //include('./config/Database.php');

  //instantiate and connect to DB
  //$database = new LibraryDatabase();
  //$db = $database->connect();
    include('./views/view5.php');
    // header("Access-Control-Allow-Orgin: *");
    $view = new View5($db);

    //blog post query
    $res = $view->read();

    //get row count
    $num = $res->rowCount();

    if ($num > 0) {
        $View5_arr = array();
        $View5_arr['data'] = array();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            extract($row);


            $View5_item = array(
                '$Members_Id' => $Members_Id,
                '$M_Fname'=>$M_Fname,
                '$M_LName'=>$M_LName

            );

    echo "<tr><td>".$Members_Id."</td><td>$M_Fname</td><td>$M_LName</td></tr>";
    // echo $row["Members_Id"];
            //push data
            // array_push($member_arr['data'], $member_item);
        }
        //turn to json & output
        // echo json_encode($member_arr);
    } else {
        // echo json_encode(
        //     array("message" => 'No posts Found')
        // );
        echo "<h1>There are 0 rows</h1>";
    }










 ?>
