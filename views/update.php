<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- FOnts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php

    // Establish Database connection
include('./config/Database.php');
  include_once 'C:\wamp64\www\GitHub\Library-Database\LibDatabase\Author\AuthorRead.php';
$database=new LibraryDatabase();
$db = $database->connect();
$author=new AuthorRead($db);


     ?>
      <h2>Update and Read Author Information</h2>
      <h3>select table</h3>
      <label for="Tables">Choose which Author id to update:</label>
        <div id="inputfield">
        </div>
      <form action=''method="post"name="UpdateAuthor">
        <select class="" id="idselect"name="authorIdSelect">
          <?php
          $rows=$author->getAuthorTable();
          while($ids = $rows->fetch( PDO::FETCH_ASSOC )){
            echo '<option value="'.$ids["Author_Id"].'">'.$ids["Author_Id"].'</option>';
          }
          ?>
        </select>
        <label for='A_FName'>First name:</label>
          <input type='text' id='A_FName' name='A_FName'><br><br>
        <label for='A_LName'>Last name:</label>
        <input type='text' id='A_LName' name='A_LName'><br><br>
          <label for='A_BDate'>BirthDate:</label>
        <input type='date' id='A_BDate' name='A_BDate'><br><br>
        <label for='A_Country'>Country:</label>
        <input type='text' id='A_Country' name='A_Country'><br><br>
        <input type='submit' name="UpdateAuthor"onclick="UpdateAuthor()">
      </form>
          <?php
          //Script to update author information
          if (isset($_POST["UpdateAuthor"])){

            $id=$_POST['authorIdSelect'];
            echo "<h3>Old Selected column</h3>";
            echo "<DOCTYPE=html>";
            $columnIndex=$author->getAuthorColumn($id);
            echo "<table>";
            echo "<tr>";
                    echo "<th>Author Id</th>";
                    echo "<th>A_FName</th>";
                    echo "<th>A_LName</th>";
                    echo "<th>A_BDate</th>";
                    echo "<th>A_Country</th>";
            echo "</tr>";
            $oldcol=$author->getAuthorColumn($id);
            $printcol=$author->printAuthorColumnTable($oldcol);
            echo "</table>";
            include_once 'C:\wamp64\www\GitHub\Library-Database\LibDatabase\Author\AuthorUpdate.php';
            $authorUp=new AuthorUpdate($db);
            $authorCols=$authorUp->getFieldsPost($_POST);

            $Update=$authorUp->Update($authorCols);

            $oldcol=$author->getAuthorColumn($id);
            $printcol=$author->printAuthorColumnTable($oldcol);
          }








           ?>


      <br>
      <div class=""id="tableInputs">
      </div>
      <?php  ?>
  </body>
</html>
