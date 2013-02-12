<?php

require_once("../Common/BaseClass.php");
require_once("../Common/FunctionLibrary.php");

class MailAddress extends BaseClass{
    
    // http://msdn.microsoft.com/en-us/library/system.net.mail.mailaddress.aspx
     
    private $address = null;
    public function  setAddress($val){
        
        if(!filter_var($val, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Invalid Email Address");
        }
        else
        {
           $this->address = $val;
        } 
    }
    public function getAddress(){
    	
        return $this->address;
    }
      
    private $displayName = null;
    public function  setdisplayName($val){
    	$this->displayName = $val;
    }
    public function  getdisplayName(){
    	return $this->displayName;
    }
    
      
    private $user = null;
    private function setUser($val){
        $this->user =$val;
    }
    public function  getUser(){
    	return $this->user;
    }
     
    private $host = null;
    private function setHost($val){
        $this->host =$val;
    }
    public function  getHost(){
    	return $this->host;
    }
    
    function __construct()
    {
        $numArgs = func_num_args() ;
        if($numArgs === 1)
        {
            $arg0 = func_get_arg(0);
            $this->setAddress($arg0);
        }
        else if($numArgs ===2){
            $arg0 = func_get_arg(0);
            $arg1 = func_get_arg(1);
            $this->setAddress(func_get_arg(0));
            $this->setdisplayName($arg1);
        }
        else{
            throw new Exception("Constructor takes an email address and optional display name");
        }
       
        $ar=explode("@",$this->getAddress());
        $this->setUser($ar[0]);
        $this->setHost($ar[1]);  
    }
    
    function ToString() {
        print($this->GetAddress());
    } 
    
    function __destruct() {
        
    } 
    
    
    
}
?>