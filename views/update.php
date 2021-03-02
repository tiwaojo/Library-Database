<?php
include_once("header.php");
// Establish Database connection
include_once('../config/Database.php');
include_once('../LibDatabase\Author\AuthorRead.php');
$database = new LibraryDatabase();
$db = $database->connect();
$author = new AuthorRead($db);
?>


<h2>Update and Read Author Information</h2>
<h3>select table</h3>
<label for="Tables">Choose which Author id to update:</label>
<div id="inputfield">
</div>
<form action='AuthorUpdate.php' method="post" name="UpdateAuthor">
    <select class="" id="idselect" name="authorIdSelect">
        <?php
        $rows = $author->getAuthorTable();
        while ($ids = $rows->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $ids["Author_Id"] . '">' . $ids["Author_Id"] . '</option>';
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
    <input type='submit' name="UpdateAuthor" onclick="UpdateAuthor()">
</form>
<?php
//Script to update author information
if (isset($_POST["UpdateAuthor"])) {
    $id = $_POST['authorIdSelect'];
    echo "<h3>Old Selected column</h3>";
    echo "<DOCTYPE=html>";
    $columnIndex = $author->getAuthorColumn($id);
    echo "<table>";
    echo "<tr>";
    echo "<th>Author Id</th>";
    echo "<th>A_FName</th>";
    echo "<th>A_LName</th>";
    echo "<th>A_BDate</th>";
    echo "<th>A_Country</th>";
    echo "</tr>";
    $oldcol = $author->getAuthorColumn($id);
    $printcol = $author->printAuthorColumnTable($oldcol);
    echo "</table>";
    include_once 'C:\wamp64\www\GitHub\Library-Database\LibDatabase\Author\AuthorUpdate.php';
    $authorUp = new AuthorUpdate($db);
    $authorCols = $authorUp->getFieldsPost($_POST);

    $Update = $authorUp->Update($authorCols);

    $oldcol = $author->getAuthorColumn($id);
    $printcol = $author->printAuthorColumnTable($oldcol);
}

?>


<br>
<div class="" id="tableInputs">
</div>
<?php  ?>
</body>

</html>