<?php
    class Core_Model_Resource_Collection_Abstract
    {
        protected $_resource = null;
        protected $_modelClass = '';
        protected $_select = [];

        protected $_isLoaded = false;

        protected $_data = [];

        public function setModelClass($modelClass) {
            $this->_modelClass = $modelClass;
        }

        public function setResource(Core_Model_Resource_Abstract $resource) {
            $this->_resource = $resource;
            return $this;
        }

        public function getData()
        {
            if (!$this->_isLoaded) {
                $this->load();
            }
            // echo 121231123;
            // print_r($this->_data);
            return $this->_data;
        }

        // public function getModel($modelClass){
        //     $this->_model = $modelClass;
        // }    

        public function select() {
            // echo "123";
            $this->_select['from'] = $this->_resource->getTableName();
            // print_r($this);
            return $this;
        }

        public function addFieldToFilter($column, $filter) {
            $this->_select['where'][$column][] = $filter;
            return $this;
        }
        // public function whereCondition()
        // {
        //     $whereCond = [];
        //         foreach($this->_select['where'] as $_field => $_filters){
                    
        //             foreach($_filters as $_value){    
        //                 if(!is_array($_value)) {
        //                     $_value = ['eq' => $_value];
        //                 }
        //                 foreach($_value as $_k => $_v){
        //                     switch ($_k) {
        //                         case 'gt':
        //                             $whereCond[] = "`$_field` > '{$_v}' ";
        //                             break;
        //                         case 'in':
        //                             $whereCond[] = "`$_field` IN ( '{$_v}') ";
        //                             break;
        //                         case 'eq':
        //                             $whereCond[] = "`$_field` = '{$_v}' ";
        //                             break;
        //                         // default:
        //                             // $whereCond[] = "";
        //                     }
        //                 }
        //             }
        //         }
        //         $whereCond = implode(" AND ", $whereCond);
        //         return $whereCond;
        // }


        public function load()
        {
            $sql = "SELECT * FROM {$this->_select['from']} ";
            if(isset($this->_select['where']) && count($this->_select['where'])) {

                $whereCond = [];
                foreach($this->_select['where'] as $_field => $_filters){
                    
                    foreach($_filters as $_value){    
                        if(!is_array($_value)) {
                            $_value = ['eq' => $_value];
                        }
                        foreach($_value as $_k => $_v){
                            switch ($_k) {
                                case 'gt':
                                    $whereCond[] = "`$_field` > '{$_v}' ";
                                    break;
                                case 'in':
                                    $whereCond[] = "`$_field` IN ( '{$_v}') ";
                                    break;
                                case 'eq':
                                    $whereCond[] = "`$_field` = '{$_v}' ";
                                    break;
                                // default:
                                    // $whereCond[] = "";
                            }
                        }
                    }
                }
                $whereCond = implode(" AND ", $whereCond);
                $sql .= "WHERE $whereCond";
            }
            // echo $sql;
            // echo $sql;die;
            $result = $this->_resource->getAdapter()->fetchAll($sql);
            // print_r($result);
            foreach($result as $row) {
                
                $this->_data[] = Mage::getModel($this->_modelClass)->setData($row);
            }
            // print_r($this->_data);
            $this->_isLoaded = true;
            return $this;
        }
    }
?>