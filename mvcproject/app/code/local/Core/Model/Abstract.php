<?php

class Core_Model_Abstract
{

    protected $_data = [];
    protected $modelClass = '';
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
        $this->_data[$this->getResource()->getPrimaryKey()] =$id ;
        return $this;
    }
    public function getId()
    {
        return isset($this->_data[$this->getResource()->getPrimaryKey()])
        ? $this->_data[$this->getResource()->getPrimaryKey()]
        :false ;
    }
    public function getResource()
    {
        return new $this->resourceClass();
    }
    public function getCollection()
    {
        $collection = new $this->collectionClass();
        // var_dump($collection);
        $collection->setModelClass($this->modelClass);
        $collection->setResource($this->getResource());
        // $collection->getModel($this->modelClass);
        $collection->select();
        return $collection;
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
return $this->_data;    
    }
    public function setData($data)
    {
// print_r($data); 
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
       
        //print_r($this->getdata());
        // $this->_beforeSave();
        $this->getResource()->save($this);
      // var_dump($this); 
        // $this->_afterSave();
        return $this;
    }
    public function _beforeSave()
    {

    }
    public function _afterSave()
    {

    }
    public function load($id, $column=null)
    {
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }
    public function delete()
    {
        //echo "delete";
        $this->getResource()->delete($this);
       return $this;
    
    }



}


?>