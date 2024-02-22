<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $pdata =  $_POST['pdata'];
// $cdata =  $_POST['cdata'];
// print_r($pdata)."<br>";
// echo "<br>";
// print_r($cdata)."<br>";
// echo "<br>";

// function insert($table_name,$data){
//     $columns = $VALUES = [];
//     foreach($data as $col => $val){
//         $columns[] = "`$col`";
//         $VALUES[] = "'". addslashes($val). "'";
//     }
//     $columns = implode(", ",$columns);
//     $VALUES = implode(", ",$VALUES);
//     echo "INSERT INTO {$table_name} ({$columns}) VALUES ({$VALUES})";

// insert('ccc_product1',$pdata);
// $conn->quary($sql);
// echo "<br>";
// insert('ccc_product1',$cdata);
// $conn->quary($sql);

$conn->close();

?>