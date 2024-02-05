<?php
    require_once "queryBuilder.php";
    require_once "connection.php";
    class Execute
    {
        private $conn;
        private $queryBuilder;
    
        public function __construct($conn) {
            $this->conn = $conn;
            $this->queryBuilder = new QueryBuilder();
        }
    
        public function insertData($table, $data) {
            $query = $this->queryBuilder->insert($table, $data);
    
            $result = mysqli_query($this->conn,$query);
            //$result =$this->conn->query($query);
            return $result;
        }

        public function updateData($table, $data, $where) {
            $query = $this->queryBuilder->update($table, $data, $where);
    
            $result = mysqli_query($this->conn,$query);

            return $result;
        }

        public function deleteData($table, $where) {
            $query = $this->queryBuilder->delete($table, $where);
    
            $result = mysqli_query($this->conn,$query);
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
            return ($data);
        }
    }
    
    
    
    // $pdata = [1,2,3];
    // $obj = new queryExecute();
    // $obj1 = new queryBuilder();
    // $obj1->insert('ccc_product',$pdata);
    // echo ($obj->execute($conn,$obj1));

?>