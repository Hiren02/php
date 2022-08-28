<?php

$name = " Hiren is a good boy ";
echo $name;
echo "<br>";
echo " The length of my string is ". strlen($name);
echo "<br>";
echo "Total word in my string is ".str_word_count($name);
echo "<br>";
echo " Reverse of my string is ".strrev($name);
echo "<br>";
echo strpos($name,"is"); // is start in my string is 6. show position
echo "<br>";
echo str_replace("Hiren","Manan",$name);
echo "<br>";
echo str_repeat($name,23);
echo "<br>";
echo "<pre>";
echo rtrim("   This is a good boy    ");
echo "<br>";
echo ltrim("   This is a good boy    ");
echo "</pre>";
echo "<br>";


?>