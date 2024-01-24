<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
</head>
<body>

    <?php
    // Establishing MySQL connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $productName = $_POST["productName"];
        $sku = $_POST["sku"];
        $productType = $_POST["productType"];
        $category = $_POST["category"];
        $manufacturerCost = $_POST["manufacturerCost"];
        $shippingCost = $_POST["shippingCost"];
        $totalCost = $_POST["totalCost"];
        $price = $_POST["price"];
        $status = $_POST["status"];
        $createdAt = $_POST["createdAt"];
        $updatedAt = $_POST["updatedAt"];

        
        // $sql = CREATE TABLE ccc_product (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     productName VARCHAR(255) NOT NULL,
        //     sku VARCHAR(50) NOT NULL,
        //     productType VARCHAR(20) NOT NULL,
        //     category VARCHAR(50) NOT NULL,
        //     manufacturerCost DECIMAL(10, 2) NOT NULL,
        //     shippingCost DECIMAL(10, 2) NOT NULL,
        //     totalCost DECIMAL(10, 2) NOT NULL,
        //     price DECIMAL(10, 2) NOT NULL,
        //     status VARCHAR(20) NOT NULL,
        //     createdAt DATE NOT NULL,
        //     updatedAt DATE NOT NULL
        // );
        // Insert data into MySQL
        $sql = "INSERT INTO ccc_product (productName, sku, productType, category, manufacturerCost, shippingCost, totalCost, price, status, createdAt, updatedAt)
                VALUES ('$productName', '$sku', '$productType', '$category', '$manufacturerCost', '$shippingCost', '$totalCost', '$price', '$status', '$createdAt', '$updatedAt')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- The rest of your form remains unchanged -->
        <!-- ... (same as the previous HTML form) ... -->
    </form>

</body>
</html>
