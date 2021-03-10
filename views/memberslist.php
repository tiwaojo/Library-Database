<?php

include_once("header.php");
?>

<div class="Title">
    <h2>Display all members</h2><!-- table displays all members in database-->
</div>
<div id="content-area">
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php


    include('LibDatabase/Members/read.php');//includes functions from read.php

  ?>
    </table>
</div>

</body>

  </body>
</html>
