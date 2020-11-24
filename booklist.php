<!DOCTYPE html>
<html lang="en">

<head>  
<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="memberslist.php">Members</a></li>
        <li><a href="signin.php">Sign-In</a></li>
        <li><a href="signup.php">Register</a></li>
        <li><a href="booklist.php">Book List</a></li>
        <li><a href="librarylist.php">Visit Us!</a></li>
    </ul>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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
  </body>