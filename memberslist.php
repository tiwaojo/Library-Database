
<?php 

header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

include('header.php');
?>

<div class="Title">
<h2>Display all members</h2>
</div>

<div class= "content-area">
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>


        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include('LibDatabase/Members/read.php');
  ?>

   </table>
</div>
  </body>