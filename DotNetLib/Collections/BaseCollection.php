<?php
require_once("../Common/BaseClass.php");
require_once("../Common/FunctionLibrary.php");

abstract class BaseCollection extends BaseClass implements ArrayAccess, IteratorAggregate{
    
    protected $collectionArray = array();
    
	public function __construct()
	{
		$items = array();
        $this->collectionArray = $items;
        
	}
    
    public function clear()
	{
		$this->collectionArray = array();
	}
	
	public function contains($item)
	{
		foreach($this->collectionArray as $v)
		{
			if($item === $v)
			{
				return true;
			}
		}
		return false;
	}
	
    public function count()
	{
        return count($this->collectionArray);
	}
    
    public function getIterator()
    {
        return new ArrayIterator( $this->collectionArray);
    }
    
    public function offsetExists($index) {
        return isset($this->collectionArray[$index]);
    }
    
    public function offsetGet($index) {
        if($this->offsetExists($index)) {
            return $this->collectionArray[$index];
        }
        return false;
    }
    
    public function offsetSet($index, $value) {
        if($index) {
            $this->collectionArray[$index] = $value;
        } else {
            $this->collectionArray[] = $value;
        }
        return true;
        
    }
    
    public function offsetUnset($index) {
        unset($this->collectionArray[$index]);
        return true;
    } 
}
?>