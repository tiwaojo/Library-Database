
<?php
 include('header.php');
?>

<div class= "content-area"><h2>Display all books</h2>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();
   
    include('../LibDatabase/Books/readbooks.php');

  ?>
  </table>
</div>
  </body>