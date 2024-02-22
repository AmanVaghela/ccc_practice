<?php
class Catalog_Model_Resource_Product
{
    protected $_tableName = null;
    protected $_primaryKey = null;

    public function __construct()
    {
        $this->init();
    }
    //Above all code move to resource abstract
    public function init()
    {
        $this->_primaryKey = "id";
        $this->_tableName = "ccc_product";
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function getTableName()
    {
        return $this->_tableName;
    }
    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    public function load($id, $column = null)
    {
        $query =  "SELECT * FROM {$this->getTableName()} WHERE  {$this->getPrimaryKey()} = {$id} LIMIT 1";
        return $this->getAdapter()->fetchRow($query);
    }

    public function save(Catalog_Model_Product $product)
    {

        $data = $product->getData();
        //print_r($data);

        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }

        $insertData = $this->insertSql($this->getTableName(), $data);
        // var_dump($data);
        echo $insertData;
        $id = $this->getAdapter()->insert($insertData);
        ($product->setId($id));
    }

    public function delete($id)
    {

        //print_r($data);
        $deleteData = $this->deleteSql($this->getTableName(), [$this->_primaryKey => "$id"]);
        // var_dump($data);
        echo $deleteData;
        $id = $this->getAdapter()->delete($deleteData);
        // ($product->setId($id));
    }

    public function insertSql($table, $data)
    {

        $columns = $values = [];

        foreach ($data as $key => $value) {
            $columns[] = "$key";
            $values[] = $value;
        }
        $columnsVal = "`" . implode("` , `", $columns) . "`";
        $val = "'" . implode("' , '", $values) . "'";
        return "INSERT INTO $table ($columnsVal) VALUES ($val)";
    }

    public  function updateSql($table, $data, $where)
    {
        foreach ($data as $key => $value) {
            $columns[] = "`$key` = '" . addslashes($value) . "'";
        }
        $columns = implode(",", $columns);

        foreach ($where as $key => $value) {
            $whereClause[] = "`{$key}` = '" . addslashes($value) . "'";
        }
        $whereClause = implode(" AND ", $whereClause);

        return "UPDATE {$table} SET {$columns} WHERE {$whereClause}";
    }

    function deleteSql($tablename, $where) {
        $whereClause = [];
    
        foreach ($where as $_field => $_value) {
            global $con; // Assuming $con is your database connection variable
            $whereClause[] = "$_field = '$_value'";
        }
    
        $whereClause = implode(" AND ", $whereClause);
        return "DELETE FROM {$tablename} WHERE {$whereClause};";
    }
}
