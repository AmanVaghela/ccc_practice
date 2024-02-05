<?php
    include "connection.php";
    include "queryBuilder.php";
    include "queryExecute.php";
    include "Data_Collection.php";
    $conn =connectToDatabase();
    $build = new queryBuilder();
    $query =$build-> select('ccc_product',['*'],['where'=>[],'order_by' => ['id DESC'],'limit'=>20]);
    // echo "$query";
    $execute = new QueryExecute();
    $data =$execute->fetch($conn,$query);
    // print_r($data);
    $newObj = new Data_Collection_Object();
    
    
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
            <?php foreach($data as $_data) {
                    $newObj->addData($_data);
                }
            
                foreach($newObj->getData() as $_mmdata) 
                    {
            ?>
            <td><?php echo $_mmdata->getid(); ?> </td>
            <td><?php echo $_mmdata->getproductName(); ?> </td>
            <td><?php echo $_mmdata->getsku(); ?> </td>
            <td><?php echo $_mmdata->getproductType(); ?> </td>
            <td><?php echo $_mmdata->getcategory(); ?> </td>
            <td><?php echo $_mmdata->getmanufacturerCost(); ?> </td>
            <td><?php echo $_mmdata->getshippingCost(); ?> </td>
            <td><?php echo $_mmdata->gettotalCost(); ?> </td>
            <td><?php echo $_mmdata->getprice(); ?> </td>
            <td><?php echo $_mmdata->getstatus(); ?> </td>
            <td><?php echo $_mmdata->getcreatedAt(); ?> </td>
            <td><?php echo $_mmdata->getupdatedAt(); ?> </td>
        <?php echo "<td><a href = 'product_form.php?id=" . $_mmdata->getid()."'>Update</a></td>";?>
        <?php  echo "<td><a href = 'product_form.php?deleteid=" . $_mmdata->getid()."'>Delete</a></td>";?>
        </tr>
            <?php
                }
            ?>
      
    </table>
    
</body>
</html>