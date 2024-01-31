<?php
    include "connection.php";
    include "QuaryBuilder.php";
    include "ExecuteQuary.php";

    $conn= connectToDatabase();
    $execute = new Execute($conn);
    $result = $execute->fetch_assoc('ccc_product');
    closeDatabaseConnection($conn);  
?>
<!-- <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Product List</title>
        <style>
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
            tr:hover {
              background-color: grey;
            }
     
            h1 {
                text-align: center;
            }
         </style>
    </head>
    <body>
    
    <h1>Product List</h1>
    
   
    <table>
        <tr>
    <th> Product id</th>
    <th>Product name</th>
    <th>SKU</th>
    <th>Category</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    <?php

    $sql= "SELECT product_id,product_name,sku,category FROM product ORDER BY product_id DESC";
 ?>
 <?php
 while($rows=$result->fetch_assoc($table)){
    $id = $rows['id'];
 
?>
    <tr>
         <td><?php echo $rows['id']." ";?> </td>
       <td><?php echo $rows['productName']." ";?> </td>
       <td><?php echo $rows['sku']." ";?></td>
        <td> <?php echo $rows['category']." ";?></td>
        <td> <a href='product.php?updateid=<?php echo $id;?>'><button>Edit </button></a></td>
        <td> <a href='product.php?deleteid=<?php echo $id;?>'><button>Delete </button></a></td>
    </tr>
    <?php
 }
    ?>
    </table>
    </body>
    </html> -->