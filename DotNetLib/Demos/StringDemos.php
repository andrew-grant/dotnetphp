<?php 

require_once("../Common/FunctionLibrary.php");  

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<h1>Testing String utility</h1>

<h2>IsNullOrEmpty</h2>
<?php

$result = IsNullOrEmptyString("");

if($result)
{
    echo P("Its null or empty"); 
}else
{
    echo P($result . " Its NOT null or empty"); 
    
}

?>

<h2>Trim</h2>
<?php

$someWordWithSpaces = "   dog   ";

echo "<p>The word is " . Length( $someWordWithSpaces) . " chars long.</p>";

$someWordWithSpaces = Trim($someWordWithSpaces);

echo "<p>After the Trim, the word is now " . Length( $someWordWithSpaces)   . " chars long.</p>" 

?>




</body>
</html>