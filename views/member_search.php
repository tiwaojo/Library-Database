<?php
include('header.php'); //includes functions in header.php
?>

<div class="content-area">
  <!--table diplays all books inn database-->
  <h2>Search Book </h2>
  <form action="searchbook.php" method="post">
    <!-- uses searchbook.php and post method-->
    <input id="search-input" type="text" placeholder="Search.." name="search">
    <button id="submit-search" type="submit"><i class="fa fa-search"></i></button>
  </form>
  <table>
    <tr>
      <th>ISBN</th>
      <th>Book Title</th>
      <th>Author</th>
      <th>Genre</th>
    </tr>

    <!-- <div class="content-area"> -->

    <!-- </div> -->
  </table>
  </body>

  </html>