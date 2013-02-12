<?php 

// -------------------------- HTML HELPER FUNCTIONS -------------------------------------------//

function H1($str)
{
    echo "<h1>$str</h1>"; 
}

function H2($str)
{
    echo "<h2>$str</h2>"; 
}

function H3($str)
{
    echo "<h3>$str</h3>"; 
}

function P($str)
{
    echo "<p>$str</p>"; 
}

function Hr()
{
    echo "<hr/>"; 
}


// -------------------------- WEB FORM FUNCTIONS -------------------------------------------//

function Post($str)
{
    return $_POST[$str];
} 

function Get($str)
{
    return $_GET[$str];
}

function Form($str)
{
    //todo:
    return $_GET[$str];
}


// -------------------------- DATA CHECKING AND VALIDATION FUNCTIONS -------------------------------------------//

function IsNull($arg)
{
    //  todo: test
    if($arg === null){
        return true;
    }
    return false;
}

function IsDefined($arg)
{
    //  todo: test
    if(isset($arg)){
        return true;
    }
    return false;
} 



// -------------------------- STRING FUNCTIONS -------------------------------------------//

function IsNullOrEmptyString($str){
    return (!isset($str) || $str==='');
}

function Length($str){
    return strlen($str);
}

function ToUpper($str){
    return strtoupper($str);
}

function ToLower($str){
    return strtolower($str);
}


?>