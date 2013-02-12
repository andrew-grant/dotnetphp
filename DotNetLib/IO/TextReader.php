<?php

require_once("TextFile.php");

class TextReader extends TextFile{
    
    private $fgetsBufferSize = 4096;

    function __construct()
    {
        $numArgs = func_num_args() ;
        if($numArgs < 1)
        {
            throw new Exception("You must construct the FileReader using a filename (and optional integer representing ReadLine buffer size).");
        }
        
        parent::__construct(func_get_arg(0)); 
        
        if( func_num_args() > 1)
        {
            // the argument was passed so override
            // the default of 4096
            $this->fgetsBufferSize = func_get_arg(1);
        }
        
    }
    
    function ReadLine() { 

        if(!$this->isOpen)
        {
            $this->Open("r");
        }
        
        if (!feof($this->fileHandle)) {
            
            $line = fgets($this->fileHandle,$this->fgetsBufferSize);
            return $line;
        }
        else
        {
            // release the file handle
            $this->Close();
            return null;
        }
    } 
    
    function ReadToEnd() { 
        $wholeFile = "";
        while(($line = $this->ReadLine()) != null)
        {
            $wholeFile .= $line;
        }
        return $wholeFile;
    } 
    
    function Read() {
        // todo: char at a time - see c# functionality
        throw new Exception("Not Yet Implemented");
    } 
    
}

?>