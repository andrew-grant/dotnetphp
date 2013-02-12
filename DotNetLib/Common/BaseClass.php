<?php

require_once("FunctionLibrary.php");

class BaseClass{
     
    function __construct()
    {
    }

    protected function ToString() {
        // Add call to object toString in case class do not override??
        print("ToString not yet implemented");
    } 
    
    function __destruct() {
        
    } 
    
    
    function __get( $property ) {
        $method = "get{$property}";
        echo "1";
        if ( method_exists( $this, $method ) ) {
            echo "2";
            return $this->$method();
        }
    }
    
    function __set( $property, $value ) {
        $method = "set{$property}";
        if ( method_exists( $this, $method ) ) {
            return $this->$method( $value );
        }
    }
    
    
    
    
    
    
    
    
}

?>