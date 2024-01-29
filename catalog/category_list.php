<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <ol>
        <?php
        
            include 'sql/connection.php';

            //fetch category from ccc_category table
            $query = "SELECT * FROM ccc_category";
            $result = mysqli_query($conn,$query);

            // Display the records using UL/LI tags
            echo "<h2>Category name:</h2>";
            while($row = mysqli_fetch_assoc($result) ){

                echo "<li>" . $row["name"] . "</li>";
            }

            // Close the database connection
            $conn->close();
        ?>
    </ol>

</body>
</html>