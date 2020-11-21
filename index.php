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
</body>

</html>