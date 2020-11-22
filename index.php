<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Library Database</h1>
    <h2>Display all members</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include 'LibDatabase/Members/read.php';

  ?>
    </table>

    <h2>Display all books</h2>
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

    include 'LibDatabase/Books/readbooks.php';

  ?>
  </table>

    <h2>Display all genres</h2>
    <table>
        <tr>
            <th>Genre ID</th>
            <th>Genre Name</th>

        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include 'LibDatabase/Genre/readgenre.php';

  ?>
  </table>

    <h2>Display all Libraries</h2>
    <table>
    <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include 'LibDatabase/Library/readLib.php'; ?>
        </tr>
  </table>

  <h2>Display all Loaned Books</h2>
    <table>
    <tr>
            <th>Loan Id</th>
            <th>ISBN</th>
            <th>Members ID</th>
            <th>Date Loaned</th>
            <th>Loan Status</th>
            <th>Due Date</th>
            <?php include 'LibDatabase/Loaned_Book/LoanedRead.php'; ?>
        </tr>
  </table>

    <h2>Display all Publishers</h2>
    <table>
    <tr>
            <th>Publisher Id</th>
            <th>Publisher Name</th>
            <th>Publisher Address</th>
            <?php include 'LibDatabase/Publisher/ReadPub.php'; ?>
        </tr>
  </table>  
        
</body>

</html>
