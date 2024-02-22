<?php

class Core_Model_Abstract
{

    protected $_data = [];
    protected $resourceClass = '';
    protected $collectionClass = '';
    protected $resource = null;
    protected $collection = null;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {

    }
    public function setResourceClass($resourceClass)
    {
        
    }
    public function setCollectionClass($collectionClass)
    {
        
    }
    public function setId($id)
    {
        return $this->_data[$this->getResource()->getPrimaryKey()]=$id;
    }
    public function getId()
    {
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function getResource()
    {
        return new $this->resourceClass();
    }
    public function getCollection()
    {
        
    }
    
    public function __set($key, $value)
    {
        
    }
    public function __get($key)
    {
        
    }
    public function __unset($key)
    {
        
    }
    public function __call($name, $args) {
        // $name = strtolower(substr($name, 3));
        $name = $this->camelTodashed(substr($name, 3));
        return isset($this->_data[$name])
            ? $this->_data[$name]
            : "";
    }
    public function dashesToCamelCase($string, $capitalizeFirstCharacter = false) 
    {
        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }
        return $str;
    }
    public function camelTodashed($className) {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1_', $className));
    }
    public function getData($key=null)
    {

        // $this->_data;
        // print_r($this->_data);
        // return $this;
        return $this->_data;
    
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
        
    }
    public function removeData($key = null)
    {
        
    }
    public function save()
    {
        //echo "45654";
        //print_r($this->getdata());
        $this->getResource()->save($this);
        return $this;
    }
    public function load($id, $column=null)
    {
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }
    public function delete($id)
    {
        echo "delete";
        $this->getResource()->delete($id);
       return $this;
    
    }



}


?>