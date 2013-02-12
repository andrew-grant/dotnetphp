<?php

require_once("../Collections/ArrayList.php");
require_once("../Common/FunctionLibrary.php");
require_once("../Mail/MailAddress.php");

class MailAddressCollection extends ArrayList{
    
    public function __construct()
	{
		parent::__construct();
	}
    
    public function add($mailAddress)
	{
        parent::add($mailAddress);
	} 
    
    public function asMailAddress($mailAddress)
    {
        if(gettype($mailAddress) === "string"){
            $mailAddress = new MailAddress($mailAddress); 
        }
        return $mailAddress;
    }
    
    public function offsetSet($index, $value) {
        
        if($index) {
            $this->collectionArray[$index] = $value;
        } else {
            $value = $this->asMailAddress($value);
            parent::add($value);
        }
        return true;
        
    }
}
?>