<?php
include('header.php');//includes functions from header.php
  ?>

<!-- table to display all books in database -->
<?php   include('../LibDatabase/Books/readbooks.php');//call functions from readbooks.php to display table
      ?>


<div class="content-area">
    <h2>Display all genres</h2> <!-- table to display all genres in database-->
    <table>
        <tr>
            <th>Genre ID</th>
            <th>Genre Name</th>

        </tr>
        <?php include '../LibDatabase/Genre/readgenre.php';//call functions from readgenre.php to display table

  ?>
    </table>
</div>

<div class="content-area">
    <h2>Display all Libraries</h2>
    <!-- table to display all libraries in database-->
    <table>
        <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include('../LibDatabase/Library/readLib.php'); //call functions from readLib.php to display table
            ?>
        </tr>
    </table>
</div>

<div class="content-area">
    <h2>Display all Loaned Books</h2><!-- table to display all loaned books in database-->
    <table>
        <tr>
            <th>Loan Id</th>
            <th>ISBN</th>
            <th>Members ID</th>
            <th>Date Loaned</th>
            <th>Loan Status</th>
            <th>Due Date</th>
            <?php include '../LibDatabase/Loaned_Book/LoanedRead.php'; //call functions from LoanedRead.php to display table
            ?>
        </tr>
    </table>
</div>

<div class="content-area">
    <h2>Display all Publishers</h2><!-- table to display all Publishers in Database -->
    <table>
        <tr>
            <th>Publisher Id</th>
            <th>Publisher Name</th>
            <th>Publisher Address</th>
            <?php include '../LibDatabase/Publisher/ReadPub.php'; //call functions from ReadPub.php to display table
            ?>
        </tr>
    </table>
</div>
</body>

</html>