<?php

require_once("../Common/BaseClass.php");
require_once("../Common/FunctionLibrary.php");

class TextFile extends BaseClass{

    protected $isOpen = false;
    protected $fileHandle = null;
    
    protected $filename; 
    public function GetFilename()
    {
        return $this->filename;
    }
    
    public function __construct($fname)
    {
        // todo: add text file specific behaviour
        // (plus check it IS a txt file?)
        $this->filename = $fname;
    }

    public function Open($mode) { 
        
        if(ToLower($mode) === "r")
        {
            $this->isOpen = true;
            $this->fileHandle = fopen($this->GetFilename(), "r");
        }
         
        // todo: modes to be added!!!

    } 
    
    public function Close() { 
        
        if($this->isOpen && isset($this->fileHandle))
        {
            fclose($this->fileHandle);
            $this->isOpen = false;
        }
        
    } 
    
    public function FileExists() { 
        return file_exists ( $this->GetFilename() );
    } 
    
    public function __destruct() {
        
        $this->Close();
        
    } 
    
}
?>