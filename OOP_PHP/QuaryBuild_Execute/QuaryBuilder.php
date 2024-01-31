<?php

class QueryBuilder {
    public function insert($table, $data) {
        $columns = $values = [];

        foreach ($data as $field => $value) {
            $columns[] = "`$field`";
            $values[] = "'$value'";
        }

        $columns = implode(",", $columns);
        $values = implode(",", $values);

        return "INSERT INTO `$table` ({$columns}) VALUES ({$values});";
    }


    public function update($table, $data, $where) {
        $columns = $whereCond = [];

        foreach ($data as $field => $value) {
            $columns[] = "`$field` = '$value'";
        }

        $columns = implode(", ", $columns);

        foreach ($where as $field => $value) {
            $whereCond[] = "`$field` = '$value'";
        }

        $whereCond = implode(" AND ", $whereCond);

        return "UPDATE $table SET $columns WHERE $whereCond;";
    }

    public function delete($table, $where) {
        $whereCond = [];

        foreach ($where as $field => $value) {
            $whereCond[] = "`$field` = '$value'";
        }

        $whereCond = implode(" AND ", $whereCond);

        return "DELETE FROM `$table` WHERE $whereCond;";
    }

    function display($tableName)
    {
        return "SELECT * FROM ({$tableName})";
    }
    //display('ccc_product');
}
