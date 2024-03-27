<?php 

class Dropdown_Model_Branch extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Dropdown_Model_Resource_Branch";
        $this->collectionClass = "Dropdown_Model_Resource_Collection_Branch";
        $this->modelClass = "Dropdown/Branch";
    }
    
}
?>