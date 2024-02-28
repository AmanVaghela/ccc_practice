<?php
Class Core_Model_Resource_Abstract

{
    protected $_tableName = null;
    protected $_primaryKey = null;

    public function __construct()
    {
        $this->init();
    }
    //Above all code move to resource abstract
    
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
        //echo $query;
        return $this->getAdapter()->fetchRow($query);
    }

    // public function save(Catalog_Model_Product $product)
    // {

    //     $data = $product->getData();
    // //    print_r($data);
    //     // var_dump($data($this->getPrimaryKey()));

    //     if (isset($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()])) 
    //      {
    //         echo "rahul";
    //         unset($data[$this->getPrimaryKey()]);
    //         $sql=$this->updateSql($this->getTableName(), $data,[$this->getPrimaryKey()=>$product->getId()]);
            
    //         $id = $this->getAdapter()->update($sql);
    //         // echo $sql;
    //      }
    //      else
    //      {
    //        $sql=$this->insertSql($this->getTableName(), $data);
           
    //        $id = $this->getAdapter()->insert($sql);
           
    //        ($product->setId($id));
    //      }


    public function save(Core_Model_Abstract $value)
    {
        // echo 111;
        $data = $value->getData();
        // print_r($data); 
        if (isset($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $value->getId()]
            );
            $id =  $this->getAdapter()->update($sql);
        } else {
                        
            $sql = $this->insertSql($this->getTableName(), $data);
            //print_r( $this->getTableName());// $sql;
            $id =  $this->getAdapter()->insert($sql);
            $value->setId($id);
        }
        echo $sql;


    //     // $insertData = $this->insertSql($this->getTableName(), $data);
        // // var_dump($data);
        // echo $insertData;
        // $id = $this->getAdapter()->insert($insertData);
        // ($product->setId($id));
    }

    public function delete(Catalog_Model_Product $product)
    {

         echo "<pre>";
        //print_r($data);
        // var_dump($getclassName());
        // die;
        var_dump($product);
        $deleteData = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey()=>$product->getId()]);
        // var_dump($data);
        print_r($deleteData);
        $id = $this->getAdapter()->delete($deleteData);
        // ($product->setId($id));
    }

    // public function delete($id)
    // {

    //     //print_r($data);
    //     $deleteData = $this->deleteSql($this->getTableName(), [$this->_primaryKey => "$id"]);
    //     // var_dump($data);
    //     echo $deleteData;
    //     $id = $this->getAdapter()->delete($deleteData);
    //     // ($product->setId($id));
    // }
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


?>