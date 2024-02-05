<?php
   include "queryBuilder.php";
   include "queryExecute.php";
   include "connection.php";
   include "Data_Collection.php";

    $conn = connectToDatabase();
    $build = new queryBuilder();
    $execute = new queryExecute();
    $id = isset($_GET['id']) 
        ?$_GET['id']
        :0;
    // $where = array('id'=>$id);
    $sql = $build->select("ccc_product",['*'],['where'=>['id'=>$id]]);
    // echo $sql;
    $data = $execute->fetch($conn,$sql);
    if(empty($data))
    {
        $obj = new Data_Object($data);
    }
    else
    {
        $obj = new Data_Object($data[0]);
    }

    // if(isset($_GET['id']))
    // {
    //     $product_id = $_GET['id'];
    //     $product = $data[0];
    // }
    if(isset($_GET['deleteid']))
    {
        $product_id = $_GET['deleteid'];
        $query=$build->delete("ccc_product",["id"=>$product_id]);
        $result=$execute->execute($conn,$query);
        // echo "Delete Data(Id value = {$product_id}) Succsessfully";
        if($result)
        {
            header('Location: product_view.php');
        }
    }

    if(isset($_POST['submit']))
    {
        
        $productData = $_POST['pdata'];//Main data --> Form Capture

        if(isset($_GET['id'])){
            $product_id = $_GET['id'];
            // $product = $data[0];
            $query=$build->update("ccc_product",$productData,["id"=>$product_id]);
            $result=$execute->execute($conn,$query);
            if($result)
            {
                echo "Update Data Succsessfully";
            }
        }
        else{
            $query=$build->insert("ccc_product",$productData);
            $result=$execute->execute($conn,$query);
            if($result)
            {
                echo '<script>alert("Product Data inserted into table successfully!");</script>';
            }
        }
    }
    
?>

<html>
	<head>
		<title>
			Forms Example
		</title>
	</head>
	<body>
		<form method="post">
		  <fieldset>
			<legend>Product information:</legend>
			<input type="hidden" id="pid" name="pdata[id]" placeholder="enter product id" value="<?php echo $obj->getid('')?>"><br><br>
			<label for="pname">Product Name:</label>
			<input type="text" id="pname" name="pdata[productName]" placeholder="enter product name" value="<?php echo $obj->getproduct_name('')?>" required ><br><br>
			<label for="sku">SKU:</label>
			<input type="text" id="sku" name="pdata[sku]" placeholder="enter stock keeping unit" value="<?php echo $obj->getsku('')?>" required ><br><br>
			<label for="ptype">Product Type:</label>
			<input type="radio" id="ptype" name="pdata[productType]" value="simple">Simple</input>
			<input type="radio" id="ptype" name="pdata[productType]" value="bundle">Bundle</input>
			<br><br>
			<label for="category">Category:</label>
				<select id="category" name="pdata[category]" >
				<option value="select">--Select--</option>
					<option value="Bar & GameRoom">Bar & Game Room</option>
					<option value="Bedroom">Bedroom</option>
					<option value="Decor">Decor</option>
					<option value="Dining & Kitchen">Dining & Kitchen</option>	
                    <option value="Lighting">Lighting</option>
                    <option value="Living Room">Living Room</option>
                    <option value="Mattresses">Mattresses</option>
                    <option value="Office">Office</option>
                    <option value="Outdoor">Outdoor</option>
				</select><br/><br/>
            <label for="manufactcost">Manufacturer Cost:</label>
			<input type="text" id="manufactcost" name="pdata[manufacturerCost]" placeholder="enter manufacturer cost" value="<?php echo $obj->getmanufacturer_cost('')?>" required ><br><br>
            <label for="shipcost">Shipping Cost:</label>
			<input type="text" id="shipcost" name="pdata[shippingCost]" placeholder="enter shipping cost" value="<?php echo $obj->getshipping_cost('')?>" required ><br><br>
            <label for="totalcost">Total Cost:</label>
			<input type="text" id="totalcost" name="pdata[totalCost]" placeholder="enter total cost" value="<?php echo $obj->gettotal_cost('')?>" required ><br><br>
            <label for="price">Price:</label>
			<input type="text" id="price" name="pdata[price]" placeholder="enter price" value="<?php echo $obj->getprice('')?>"required ><br><br>
			<label for="status">product Status:</label>
				<select id="status" name="pdata[status]" >
				<option value="select">--Select--</option>
					<option value=" Enabled" > Enabled</option>
					<option value="Disabled" >Disabled</option>
				</select><br/><br/>	
            <label for="createddate">Created At:</label>
			<input type="date" id="createddate" name="pdata[createdAt]"value="<?php echo $obj->getcreated_at('')?>" ><br><br>
            <label for="updateddate">Updated At:</label>
            <input type="date" id="updateddate" name="pdata[updatedAt]"value="<?php echo $obj->getupdated_at('')?>" ><br><br>
			<input type="submit" name="submit" value="<?= (isset($data)&&isset($_GET['id'])) ? 'Update' : 'submit' ?>" />
		  </fieldset>
		</form>
	</body>
</html>