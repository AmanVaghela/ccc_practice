<?php
class Sales_Model_Quote extends Core_Model_Abstract{

    public function init(){
        $this->resourceClass="Sales_Model_Resource_Quote";
        $this->collectionClass="Sales_Model_Resource_Collection_Quote";
        $this->modelClass="Sales/Quote";
    }

}


?>