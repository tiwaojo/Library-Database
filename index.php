<<<<<<< Updated upstream
=======

<?php
include_once 'config\Database.php';
?>
include('./config/Database.php');

//instantiate and connect to DB
$database = new LibraryDatabase();
$db = $database->connect();
?>
>>>>>>> Stashed changes
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
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <?php include 'LibDatabase/Members/read.php'; ?>
        </tr>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <?php include 'LibDatabase/Library/readLib.php'; ?>
        </tr>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>test</th>
            <th>test</th>
            <th>test</th>
            <?php include 'LibDatabase/Loaned_Book/LoanedRead.php'; ?>
        </tr>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <?php include 'LibDatabase/Publisher/ReadPub.php'; ?>
        </tr>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <?php include 'LibDatabase/Genre/ReadGenre.php'; ?>
        </tr>
        <tr>
          <th>Mem ID</th>
          <?php
          include
           ?>
        </tr>
    </table>
</body>

<<<<<<< Updated upstream
</html>
=======
</html>
>>>>>>> Stashed changes
