<?php
require_once("../Collections/Stack.php");
require_once("../Collections/ArrayList.php");

H1("Collections Demos");

H2("Testing List class");

// C# style add methods or..
$lst = new ArrayList();
$lst->add("Muriel");
$lst->add("Sally");
$lst->add("Genevive");

// ..can use array access notation
$lst[] = "Danielle"; 
$lst[] = "Henrietta"; 
$lst[] = "Phillipa"; 

// Access the second item
P($lst[1]); 

// foreach through all items
foreach ($lst as $k => $v) {
    P("$k = $v");
}

H2("Testing Stack class");

$stack = new Stack();
$stack->push("Jim");
$stack->push("Dave");
$stack->push("Fred");

P($stack->pop());
P($stack->pop());
P($stack->pop());

?>