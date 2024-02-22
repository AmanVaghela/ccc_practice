<!-- list.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last 10 Records</title>
</head>
<body>

    <h2>Last 10 Records</h2>
    
    <ul>
        <?php
        
            include 'Connection.php';

            // Fetch last 10 records from the database
            $query = "SELECT * FROM ccc_pro1 ORDER BY id DESC LIMIT 10";
            $result = $conn->query($query);

            // Display the records using UL/LI tags

            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["productName"] . " - " . $row["shippingCost"] . $row["price"] . "</li>";
                // Replace "column1" and "column2" with your actual column names
            }

            // Close the database connection
            $conn->close();
        ?>
    </ul>

</body>
</html>
