
<?php
class queryBuilder
{

    public function insert($tableName,$data)
    {
        $columns = $values = [];
        foreach ($data as $_fields => $_value)
        {
            $columns[] = "`{$_fields}`";
            $values[] = "'" . addslashes($_value) ."'";
        }
        $columns = implode(",",$columns);
        $values = implode(",",$values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
    
    }


    public function update($tableName,$data,$where)
    {
        $columns = $whereCond = [];
        foreach ($data as $_fields => $_value)
        {
            $columns[] = "`{$_fields}` =" ."'" . addslashes($_value) ."'";
        }
        $columns = implode(",",$columns);
        foreach ($where as $_fields => $_value)
        {
            $whereCond[] = "`{$_fields}` =" ."'" . addslashes($_value) ."'";
        }

        $whereCond = implode(" AND ",$whereCond);
        return "UPDATE {$tableName} SET {$columns} WHERE {$whereCond}";
        
    }

    public function delete($tablename, $where) {
        $whereClause = [];
    
        foreach ($where as $_field => $_value) {
            global $con; // Assuming $con is your database connection variable
            $whereClause[] = "`$_field` = '$_value'";
        }
    
        $whereClause = implode(" AND ", $whereClause);
        return "DELETE FROM `{$tablename}` WHERE {$whereClause};";
    }

    public function display($tableName)
    {
        return "SELECT * FROM ({$tableName})";
    }

    public function select($tblname, $columns, $options = [])
    {
        // Basic select query
        $query = "SELECT " . implode(", ", $columns) . " FROM " . $tblname;
    
        // Adding WHERE clause if provided
        if (isset($options['where']) && !empty($options['where'])) {
            $where_conditions = [];
            foreach ($options['where'] as $column => $value) {
                $where_conditions[] = "$column = '$value'";
            }
            $query .= " WHERE " . implode(" AND ", $where_conditions);
        }
    
        // Adding ORDER BY clause if provided
        if (isset($options['order_by']) && !empty($options['order_by'])) {
            $query .= " ORDER BY " . implode(", ", $options['order_by']);
        }
    
        // Adding LIMIT clause if provided
        if (isset($options['limit']) && !empty($options['limit'])) {
            $query .= " LIMIT " . $options['limit'];
        }
    
        return $query;
    }

}
// $pdata = [1,2,3];
// $obj1 = new queryBuilder();
// print_r($obj1->insert('ccc_product',$pdata));
// echo "<br>";
// print_r($obj1->update('ccc_product',$pdata,['id'=>4]));
// echo "<br>";
// print_r($obj1->delete('ccc_product',['id' =>5]));



?>