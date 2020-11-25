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
include('./config/Database.php');
$database=new LibraryDatabase();
$db = $database->connect();
     ?>
    <!-- <script type="text/javascript">
    function UpdateAuthor() {
      var submitted = new Array();
      var id=document.getElementByName('idselect').value;
      var FName=document.getElementById('fname').value;
      var LName=document.getElementById('lname').value;
      var Birth=document.getElementById('BirthDate').value;
      var Country=document.getElementById('A_Country').value;
      var AuthorArr=[id,FName,LName,Birth,Country];
      for(let i=1;i<AuthorArr.length;i++){
        if(AuthorArr[i]!=""){
          submitted[i-1]=AuthorArr[i];
        }
      }
      return submitted;

    } -->
<!--

    </script> -->

      <h2>Update and Read Author Information</h2>
      <h3>select table</h3>
      <?php
      include('./LibDatabase/Author/AuthorRead.php');
      include('./LibDatabase/Author/AuthorUpdate.php');
        $authorUp=new AuthorUpdate($db);
       $author=new AuthorRead($db);
       ?>
      <label for="Tables">Choose which Author id to update:</label>
        <div id="inputfield">
          <!-- <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname"><br> -->
          <!-- <select class="" name=""> -->
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
            // include_once 'C:\wamp64\www\GitHub\Library-Database\LibDatabase\Author\AuthorUpdate.php';
            // $authorUp=new AuthorUpdate($db);
            $authorCols=$authorUp->getFieldsPost($_POST);
            $Update=$authorUp->Update($authorCols);
            echo "<h3>New Selected column</h3>";
            echo "<table>";
            echo "<tr>";
                    echo "<th>Author Id</th>";
                    echo "<th>A_FName</th>";
                    echo "<th>A_LName</th>";
                    echo "<th>A_BDate</th>";
                    echo "<th>A_Country</th>";
            echo "</tr>";
            $newcol=$author->getAuthorColumn($id);
            $printnewcol=$author->printAuthorColumnTable($newcol);
            echo "</table>";
          }
           ?>




           <h2>Update and Read Book Information</h2>
           <h3>select table</h3>
           <?php
           include('./LibDatabase/Books/readbooks.php');
           include('./LibDatabase/Books/BookUpdate.php');
           $bookR=new BooksRead($db);
           $bookU=new BookUpdate($db);
            ?>
           <label for="Tables">Choose which ISBN to update:</label>
           <form action=''method="post"name="UpdateBooks">
             <select class="" id="idselect"name="BooksIdSelect">
               <?php
               $rows=$bookR->getBookTable();
               while($ISBNs = $rows->fetch( PDO::FETCH_ASSOC )){
                 echo '<option value="'.$ISBNs["ISBN"].'">'.$ISBNs["ISBN"].'</option>';
               }
               ?>
             </select>
             <label for='Book_Title'>Book Title:</label>
             <input type='text' id='Book_Title' name='Book_Title'><br><br>
             <!-- <label for='A_LName'>Last name:</label>
             <input type='text' id='A_LName' name='A_LName'><br><br>
             <label for='A_BDate'>BirthDate:</label>
             <input type='date' id='A_BDate' name='A_BDate'><br><br>
             <label for='A_Country'>Country:</label>
             <input type='text' id='A_Country' name='A_Country'><br><br> -->
             <input type='submit' name="UpdateBook">
            <!-- make sure to add lines indicating that which table to go to if user wants to change foreign keys -->
           </form>
               <?php
               if (isset($_POST["UpdateBook"])){
                 $ISBN=$_POST['BooksIdSelect'];
                 echo "<h3>Old Selected column</h3>";
                 echo "<DOCTYPE=html>";
                  $columnIndex=$bookR->getBookColumn($ISBN);
                 echo "<table>";
                 echo "<tr>";
                         echo "<th>ISBN</th>";
                         echo "<th>Book_Title</th>";
                         echo "<th>Publisher_Id</th>";
                         echo "<th>Genre_Id</th>";
                         echo "<th>Library_Id</th>";
                         echo "<th>Author_Id</th>";
                 echo "</tr>";
                 $oldbook=$bookR->getBookColumn($ISBN);
                 $printoldbook=$bookR->printBookColumnTable($oldbook);
                 echo "</table>";
                 // $oldcol=$author->getAuthorColumn($id);
                 // $printcol=$author->printAuthorColumnTable($oldcol);
                 // echo "</table>";
                 // include_once 'C:\wamp64\www\GitHub\Library-Database\LibDatabase\Author\AuthorUpdate.php';
                 // $authorUp=new AuthorUpdate($db);
                 // $authorCols=$authorUp->getFieldsPost($_POST);
                 // $Update=$authorUp->Update($authorCols);
                 $BookCols=$bookU->getFieldsPost($_POST);
                 $Update=$bookU->Update($BookCols);
                 echo "<h3>New Selected column</h3>";
                 echo "<table>";
                 echo "<tr>";
                         echo "<th>ISBN</th>";
                         echo "<th>Book_Title</th>";
                         echo "<th>Publisher_Id</th>";
                         echo "<th>Genre_Id</th>";
                         echo "<th>Library_Id</th>";
                         echo "<th>Author_Id</th>";
                 echo "</tr>";
                 $newcol=$bookR->getBookColumn($ISBN);
                 $printnewcol=$bookR->printBookColumnTable($newcol);
                 echo "</table>";
               }
                ?>
                           <h2>Update and Read Employee Information</h2>
                           <h3>select table</h3>
                           <?php
                           include('./LibDatabase/Employees/readEmployee.php');
                           include('./LibDatabase/Employees/UpdateEmployee.php');

                           $employeeR=new EmployeeRead($db);
                           $employeeU=new EmployeeUpdate($db);
                            ?>

                           <form action=''method="post"name="UpdateEmployees">
                             <label for="UpdateEmployees">Choose which id to update:</label>
                             <select class="" id="idselect"name="EmployeeIdSelect">
                               <?php
                               $rows=$employeeR->getEmployeeTable();
                               while($id = $rows->fetch( PDO::FETCH_ASSOC )){
                                 echo '<option value="'.$id["Employees_Id"].'">'.$id["Employees_Id"].'</option>';
                               }
                               ?>
                             </select>
                             <br>
                             <br>
                             <label for='E_FName'>First Name:</label>
                             <input type='text' id='E_FName' name='E_FName'><br><br>
                             <label for='E_LName'>Last name:</label>
                             <input type='text' id='E_LName' name='E_LName'><br><br>
                             <label for='E_BDate'>BirthDate:</label>
                             <input type='date' id='E_BDate' name='E_BDate'><br><br>
                             <label for='E_Email'>Email:</label>
                             <input type='email' id='E_Email' name='E_Email'><br><br>
                             <label for='E_Address'>Address:</label>
                             <input type='text' id='E_Address' name='E_Address'><br><br>
                             <label for='E_Username'>UserName:</label>
                             <input type='text' id='E_Username' name='E_Username'><br><br>
                             <label for='E_Password'>Password:</label>
                             <input type='text' id='E_Password' name='E_Password'><br><br>
                             <input type='submit' name="UpdateEmployee">
                            <!-- make sure to add lines indicating that which table to go to if user wants to change foreign keys -->
                           </form>
                               <?php
                               if (isset($_POST["UpdateEmployee"]))
                               {
                                 $Id=$_POST['EmployeeIdSelect'];
                                 echo "<h3>Old Selected column</h3>";
                                 echo "<DOCTYPE=html>";
                                  $columnIndex=$employeeR->getEmployeeColumn($Id);
                                 echo "<table>";
                                 echo "<tr>";
                                         echo "<th>Employees_Id</th>";
                                         echo "<th>E_FName</th>";
                                         echo "<th>E_LName</th>";
                                         echo "<th>E_BDate</th>";
                                         echo "<th>E_Email</th>";
                                         echo "<th>E_Address</th>";
                                         echo "<th>E_Username</th>";
                                         echo "<th>E_Password</th>";
                                         echo "<th>Library_Id</th>";
                                 echo "</tr>";
                                 $oldemployee=$employeeR->getEmployeeColumn($Id);
                                 $printoldemployee=$employeeR->printEmployeeColumnTable($oldemployee);
                                 echo "</table>";
                                 $EmployeeCols=$employeeU->getFieldsPost($_POST);
                                 $Update=$employeeU->Update($EmployeeCols);
                                 echo "<h3>New Selected column</h3>";
                                 echo "<table>";
                                 echo "<tr>";
                                 echo "<th>Employees_Id</th>";
                                 echo "<th>E_FName</th>";
                                 echo "<th>E_LName</th>";
                                 echo "<th>E_BDate</th>";
                                 echo "<th>E_Email</th>";
                                 echo "<th>E_Address</th>";
                                 echo "<th>E_Username</th>";
                                 echo "<th>E_Password</th>";
                                 echo "<th>Library_Id</th>";
                                 echo "</tr>";
                                 $newcol=$employeeR->getEmployeeColumn($Id);
                                 $printnewcol=$employeeR->printEmployeeColumnTable($newcol);
                                 echo "</table>";
                               }
                                ?>


      <br>
      <?php  ?>
  </body>
</html>
