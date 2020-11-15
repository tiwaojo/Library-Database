<!-- This contains the methods for views -->
<?php

// Insert link to Database.php here so we can connect to our database without writing sam code again
$query = "SELECT * FROM database_inc.employees";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}
?>