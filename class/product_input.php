<?php
   include "Execute.php";
   
   $conn = connectToDatabase();
   $execute = new Execute($conn);

   if (isset($_POST['submit'])){
       $pdata = $_POST['pdata'];
      
       $result = $execute->insertData('ccc_product', $pdata);
	   if ($result)
	   {
		   echo "row inserted ";
	   }
	   else
	   {
		   echo "Error: " . $this->conn->error;
	   }
       closeDatabaseConnection($conn);
    }

   
   
   if (isset($_POST['update'])) {
       if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $pdata = $_POST['pdata'];
        // $updateQuery = update("ccc_product", $pdata, ['product_id' => $id]); 

        $updateResult = $execute->updateData('ccc_product', $pdata, ['id' => $id]);
		if ($updateResult) {
			// echo "row updated ";
			header('location:product_list.php');
			
		}
		else
		{
			echo "Error: " . $this->conn->error;
		}
        closeDatabaseConnection($conn);

   }
}

   if (isset($_GET['deleteid'])) {
       $id = $_GET['deleteid'];

    //    $deleteQuery = delete('ccc_product', ['product_id' => $id]);

       $deleteResult = $execute->deleteData('ccc_product', ['id' => $id]);
	   if ($deleteResult) 
	   {
		// echo "Data deleted successfully!";
		header('location:product_list.php');
	   }
	   else
	   {
			echo "Error: " . $this->conn->error;
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
			<label for="status">product Status:</label>
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