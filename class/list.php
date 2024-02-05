<?php
    include "connection.php";
    include "queryBuilder.php";
    include "Execute.php";

    $conn= connectToDatabase();
    $execute = new Execute($conn);
    $result = $execute->fetch_assoc('ccc_product');
    print_r($result);
    closeDatabaseConnection($conn);
?>