<?php
    include "sql/connection.php";
	include "sql/function.php";

	
	if(isset($_POST['submit']))
	{
		
		$pdata = $_POST['pdata'];
		$insertquery = insert('ccc_product',$pdata);
		$result = mysqli_query($conn,$insertquery);
		if($result)
		{
			echo "new record inserted successfully";
		}
		else
		{
			echo "Error: " . $insertquery . "<br>" . $conn->error;
		}
	}

	if(isset($_GET['deleteid']))
	{
		$id = $_GET['deleteid'];
		$deleteQuery = delete('ccc_product',['id'=> $id]);
        if(mysqli_query($conn,$deleteQuery))
        {   
           // echo "record deleted";
		   header('location:product_list.php');
        } 
        else 
        {
            echo "Error: " . $deleteQuery . "<br>" . $conn->error;
        }

	}
    if(isset($_POST['update']))
        {
			$id = $_GET['updateid'];
            $pdata = $_POST['pdata'];
            $updateQuery = update("ccc_product",$pdata,['id'=> $id ]);
            if(mysqli_query($conn,$updateQuery))
            {   
                echo "row updated";
            } 
            else 
            {
                echo "Error: " . $updatequery . "<br>" . $conn->error;
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
			<label for="pname">Product Name:</label>
			<input type="text" id="pname" name="pdata[productName]" placeholder="enter product name" required ><br><br>
			<label for="sku">SKU:</label>
			<input type="text" id="sku" name="pdata[sku]" placeholder="enter stock keeping unit"required ><br><br>
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
			<input type="text" id="manufactcost" name="pdata[manufacturerCost]" placeholder="enter manufacturer cost" required ><br><br>
            <label for="shipcost">Shipping Cost:</label>
			<input type="text" id="shipcost" name="pdata[shippingCost]" placeholder="enter shipping cost" required ><br><br>
            <label for="totalcost">Total Cost:</label>
			<input type="text" id="totalcost" name="pdata[totalCost]" placeholder="enter total cost" required ><br><br>
            <label for="price">Price:</label>
			<input type="text" id="price" name="pdata[price]" placeholder="enter price" required ><br><br>
			<label for="status">Status:</label>
				<select id="status" name="pdata[status]" >
				<option value="select">--Select--</option>
					<option value=" Enabled" > Enabled</option>
					<option value="Disabled">Disabled</option>
				</select><br/><br/>	
            <label for="createddate">Created At:</label>
			<input type="date" id="createddate" name="pdata[createdAt]"><br><br>
            <label for="updateddate">Updated At:</label>
            <input type="date" id="updateddate" name="pdata[updatedAt]"><br><br>
			<input type="submit" name="submit" value="submit" />
			<input type="submit" name="update" value="update" />
		  </fieldset>
		</form>
	</body>
</html>