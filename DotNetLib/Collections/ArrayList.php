<?php
require_once("BaseCollection.php");


class ArrayList extends BaseCollection
{
	public function __construct()
	{
		parent::__construct();
	}
    
    public function add($item)
	{
	    $this->collectionArray[] = $item;
	}
    
    public function remove($item)
	{
	    $this->collectionArray[] = $item;
	}
    
    
    // todo: implement insert, and others
    // http://msdn.microsoft.com/en-us/library/ms132411.aspx
    
    
    
}

?>
