
<?php
 include('header.php');
?>
    <div class= "content-area"><h2>Display all Libraries</h2><!--table diaplays all libraries in database-->
    <table>
    <tr>
            
            <?php include('../LibDatabase/Library/readLib.php'); //uses functions from readLib.php to display table
            ?>
        </tr>
  </table>
  </div>
  </body>
