
<?php
 include('header.php');//includes functions in header.php
?>

<div class= "content-area"><h2>Display all books</h2><!--table diplays all books inn database-->
    <table>
        <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>


<div class="content-area"> <h2>Search Book </h2>
  <form class="" action="searchbook.php" method="post"><!-- uses searchbook.php and post method-->
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
  </body>
  </html>
