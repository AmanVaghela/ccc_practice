<?php 

class Dropdown_Model_Landlord extends Core_Model_Abstract
{
    public function init()
    {
        $this->resourceClass = "Dropdown_Model_Resource_Landlord";
        $this->collectionClass = "Dropdown_Model_Resource_Collection_Landlord";
        $this->modelClass = "Dropdown/Landlord";
    }
    
}
?>