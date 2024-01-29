<?php
   // $pdata = $_POST['pdata'];

    function insert($tableName,$data)
    {
        $columns = $values = [];
        foreach ($data as $_fields => $_value)
        {
            $columns[] = "{$_fields}";
            $values[] = "'" . addslashes($_value) ."'";
        }
        $columns = implode(",",$columns);
        $values = implode(",",$values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
    
    }

    //insert('ccc_product',$pdata);
    //echo "<br>";echo "<br>";

    function update($tableName,$data,$where)
    {
        $columns = $whereCond = [];
        foreach ($data as $_fields => $_value)
        {
            $columns[] = "{$_fields} =" ."'" . addslashes($_value) ."'";
        }
        $columns = implode(",",$columns);
        foreach ($where as $_fields => $_value)
        {
            $whereCond[] = "{$_fields} =" ."'" . addslashes($_value) ."'";
        }

        $whereCond = implode(" AND ",$whereCond);
        return "UPDATE {$tableName} SET {$columns} WHERE {$whereCond}";
        
    }
    //update('ccc_product',$pdata,['id'=>4]);
    // echo "<br>";
    // echo "<br>";

    function delete($tablename, $where) {
        $whereClause = [];
    
        foreach ($where as $_field => $_value) {
            global $con; // Assuming $con is your database connection variable
            $whereClause[] = "$_field = '$_value'";
        }
    
        $whereClause = implode(" AND ", $whereClause);
        return "DELETE FROM {$tablename} WHERE {$whereClause};";
    }
   // delete('ccc_product',['id' =>5]);
    // echo "<br>";
    // echo "<br>";

    function display($tableName)
    {
        return "SELECT * FROM ({$tableName})";
    }
    //display('ccc_product');

?>