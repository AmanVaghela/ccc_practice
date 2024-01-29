<?php
    $servername = "localhost";  // Replace with your MySQL server name or IP address
    $username = "root";      // Replace with your MySQL username
    $password = "";      // Replace with your MySQL password
    $dbname = "ccc_practice";   // Replace with your MySQL database name
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . $conn->connect_error);
    }

?>