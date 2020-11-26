
<?php
 include('header.php');
?>
    <div class= "content-area"><h2>Display all Libraries</h2>
    <table>
    <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include('../LibDatabase/Library/readLib.php'); ?>
        </tr>
  </table>
  </div>
  </body>