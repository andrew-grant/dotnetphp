<?php
require_once("../Common/FunctionLibrary.php");
require_once("../Common/BaseClass.php");
require_once("MailAddressCollection.php");

class MailMessage extends BaseClass{
    
    
    // todo: add in interceptor methods
    // to better simulate dot net experience
    private $bcc = "jimmy";
    public function  setBCC($val){
        echo "SETTER CALLED BY MAGIC";
    	$this->bcc = $val;
    }
    public function  getBCC(){
        echo "GETTER CALLED BY MAGIC";
    	return $this->bcc;
    }
     
    
    private $to = null;
    private function  setTo($val){
        $this->to = $val;
    }
    public function  getTo(){
    	return $this->to;
    }
    
    private $CC = null;
    private function  setCC($val){
    	$this->CC = $val;
    }
    public function  getCC(){
    	return $this->CC;
    } 
    
    
    private $mailAddressFrom = null;
    public function  setMailAddressFrom($val){
    	$this->mailAddressFrom = $val;
    }
    public function  getMailAddressFrom(){
    	return $this->mailAddressFrom;
    }
    
    private $subject = null;
    public function  setSubject($val){
    	$this->subject = $val;
    }
    public function  getSubject(){
    	return $this->subject;
    } 
    
    private $body = null;
    public function  setBody($val){
    	$this->body = $val;
    }
    public function  getBody(){
    	return $this->body;
    } 
    
    
    function __construct($from, $to, $subject = "", $body = "")
    {
        $this->setSubject($subject);
        $this->setBody($body);
        $ccCollection = new MailAddressCollection();
        $this->setCC($ccCollection);
        $mailToCollection = new MailAddressCollection();
        $mailToCollection->add($to);
        $this->setTo($mailToCollection);
        
        if(gettype($to) === "object" && gettype($from) === "object"){
            
            $mailToCollection->add($to);
            $this->setMailAddressFrom($from);
        }
        else if(gettype($to) === "string" && gettype($from) === "string")
        {
            $mailToCollection->add(new MailAddress($to));
            $this->setMailAddressFrom(new MailAddress($from));
            
        }else{
            throw new Exception("improper argument types in contructor: 'from' and 'to' must be either string or MailAddress types");
        }
        
        
        
    }
    
    
}
?>