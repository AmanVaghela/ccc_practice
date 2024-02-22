<?php
//include_once "Connection.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo"failed";
    die("Connection failed: " . $conn->connect_error);

}
$pdata =  $_POST['pdata'];
//$cdata =  $_POST['cdata'];

print_r($pdata)."<br>";
echo "<br>";
//print_r($cdata)."<br>";
//echo "<br>";

function insert($tablename,$data){
    $coloumns = $values = [];
    
        foreach($data as $_field => $_values){
            $coloumns[] = "`{$_field}`";
            $values[] = "'".addslashes($_values)."'"; 
        }
        $coloumns = implode(",", $coloumns);
        $values = implode(",", $values);
        return "INSERT INTO {$tablename} ({$coloumns}) VALUES ({$values});";
    }

// $sql=insert('ccc_pro1',$pdata);
// $conn->query($sql);
// print_r($sql);
// echo "<br>";

function update($tablename, $data, $where)
{
    global $conn;
    $columns = $whereCond = [];
    foreach ($data as $_field => $_value) {
        $columns[] = "`{$_field}`='" . addslashes($_value) . "'";
    }
    $columns = implode(", ", $columns);

    foreach ($where as $_field => $_value) {
        $whereCond[] = "`{$_field}`='" . addslashes($_value) . "'";
    }
    $whereCond = implode(" AND ", $whereCond);
    return "UPDATE {$tablename} SET {$columns} WHERE {$whereCond};";
}

// function delete($tablename, $data, $where)
// {
//     global $conn;
//     $columns = $whereCond = [];
//     foreach ($data as $_field => $_value) {
//         $columns[] = "`{$_field}`='" . addslashes($_value) . "'";
//     }
//     $columns = implode(", ", $columns);

//     foreach ($where as $_field => $_value) {
//         $whereCond[] = "`{$_field}`='" . addslashes($_value) . "'";
//     }
//     $whereCond = implode(" AND ", $whereCond);
//     return "DELETE FROM{$tablename} SET {$columns} WHERE {$whereCond};";
// }
function delete($tablename, $conditions) 
{
    global $con; // Assuming $con is your database connection variable
    $whereClause = [];
     foreach ($conditions as $_field => $_value) {
        $whereClause[] = "`$_field` = '$_value'";
    }
    $whereClause = implode(" AND ", $whereClause);
    return "DELETE FROM `{$tablename}` WHERE {$whereClause};";
}
 $sql = insert('ccc_pro1', $pdata);
 $conn->query($sql);
// Corrected the product name by enclosing it in quotes
// $sql = delete('ccc_pro1', $pdata,['productName' => 'Nisarg Patel']);
// $conn->query($sql);
// echo "<br>";
   $conn->close();


?>