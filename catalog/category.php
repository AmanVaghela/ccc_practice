<?Php
    include 'sql/connection.php';
    include 'sql/function.php';
    if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $cdata = $_POST['cdata'];
                    $insertquery = insert('ccc_category',$cdata);
                    if(mysqli_query($conn,$insertquery))
                    {   
                        echo "New record inserted successfully";
                    } 
                    else 
                    {
                        echo "Error: " . $insertquery . "<br>" . $conn->error;
                    }
            
                }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <fieldset>
          <legend>Category information:</legend>
          <label for="cname">Category Name:</label>
          <input type="text" id="cname" name="cdata[name]" placeholder="enter category name" required autofocus><br><br>
          <input type="submit" value="submit" />
        </fieldset>
    </form>
</body>
</html>