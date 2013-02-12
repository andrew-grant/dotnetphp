<?php

require_once("../IO/TextReader.php");
$filepath = "test.txt";

?>
 
<h2>Read a file one line at a time</h2>

<?php


$textReader1 = new TextReader($filepath);

while(($line = $textReader1->ReadLine()) != null)
{
    echo $line . "<br/>";
}

?>

<h2>Read a file one line at a time, passing a buffer max</h2>

<?php

$textReader2 = new TextReader($filepath, 8);


while(($line = $textReader2->ReadLine()) != null)
{
    echo $line . "<br/>";
}

?>


<h2>Read an entire file into a string</h2>

<?php

$textReader3 = new TextReader($filepath);

echo "<p>" . $textReader3->ReadToEnd() . "</p>";

?>