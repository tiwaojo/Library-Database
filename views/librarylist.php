
<?php
 include('header.php');
?>
    <div class= "content-area"><h2>Display all Libraries</h2><!--table diaplays all libraries in database-->
    <table>
    <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include('../LibDatabase/Library/readLib.php'); //uses functions from readLib.php to display table
            ?>
        </tr>
  </table>
  </div>
  </body>
