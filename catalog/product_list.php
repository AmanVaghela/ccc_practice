<?php
    include "sql/connection.php";
    $query = "SELECT * FROM ccc_product ORDER BY id DESC LIMIT 20";
    $result = mysqli_query($conn,$query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database to php</title>
</head>
<body>
    <table border = "4px">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>SKU</th>
            <th>Product Type</th>
            <th>Category</th>
            <th>Manufacturer Cost</th>
            <th>Shipping Cost</th>
            <th>Total Cost</th>
            <th>Price</th>
            <th>Product Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <tr>
            <?php
                while($row =mysqli_fetch_assoc($result))
                {
            ?>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['productName']; ?> </td>
            <td><?php echo $row['sku']; ?> </td>
            <td><?php echo $row['productType']; ?> </td>
            <td><?php echo $row['category']; ?> </td>
            <td><?php echo $row['manufacturerCost']; ?> </td>
            <td><?php echo $row['shippingCost']; ?> </td>
            <td><?php echo $row['totalCost']; ?> </td>
            <td><?php echo $row['price']; ?> </td>
            <td><?php echo $row['status']; ?> </td>
            <td><?php echo $row['createdAt']; ?> </td>
            <td><?php echo $row['updatedAt']; ?> </td>
        <?php echo "<td><a href = 'product.php?updateid=" .$row['id']."'>Update</a></td>";?>
        <?php  echo "<td><a href = 'product.php?deleteid=" .$row['id']."'>Delete</a></td>";?>
        </tr> 
            <?php
                }
            ?>

    </table>
    
</body>
</html>