<?php

require_once 'connection.php';
require_once 'QuaryBuilder.php';

class Execute {
    private $conn;
    private $queryBuilder;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->queryBuilder = new QueryBuilder();
    }

    public function insertData($table, $data) {
        $query = $this->queryBuilder->insert($table, $data);
        echo "Query to be executed: " . $query;

        $result = $this->conn->query($query);

        if ($result === false) {
            echo "Error: " . $this->conn->error;
        }

        return $result;
    }

    public function updateData($table, $data, $where) {
        $query = $this->queryBuilder->update($table, $data, $where);
        echo "Query to be executed: " . $query;

        $result = $this->conn->query($query);

        if ($result === false) {
            echo "Error: " . $this->conn->error;
        }

        return $result;
    }

    
    public function deleteData($table, $where) {
        $query = $this->queryBuilder->delete($table, $where);
        echo "Query to be executed: " . $query;

        $result = $this->conn->query($query);

        if ($result === false) {
            echo "Error: " . $this->conn->error;
        } else {
            echo "Data deleted successfully!";
        }

        return $result;
    }

    public function fetch_assoc($table)
    {
        $query = $this->queryBuilder->display($table);
        $result = mysqli_query($this->conn,$query);
        $data=[];
        while($r=mysqli_fetch_assoc($result))
        {
            $data[]=$r;
        }
        echo "<pre>";
        print_r($data);
    }

}
