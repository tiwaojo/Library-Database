<?php
include_once 'config\Database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Library Database</h1>
    <?php
    $object=new LibraryDatabase;
    $object->connect();
  ?>
</body>
</html>
