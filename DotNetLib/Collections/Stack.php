<?php
require_once("BaseCollection.php");

class Stack extends BaseCollection
{
	public function __construct()
	{
		parent::__construct();
	}
    
	public function peek()
	{
		return current($this->collectionArray);
	}
	
	public function pop()
	{
		return array_shift($this->collectionArray);
	}
	
	public function push($item)
	{
		array_unshift($this->collectionArray, $item);
	}
    
    // todo: add queue and hash map collections
}


?>
