<?php

// fgets - Reading a file line by line 
// fgetc- Reading a character by character 

$fptr = fopen("file.txt","r");
// echo fgets($fptr);

// **** Reading a file line by line

// while($a=fgets($fptr)){
//     echo $a;
// }
// echo "<br>";
// echo " End of the file has been reached";

// **** Reading a file character by charater

// echo fgetc($fptr);

// while($a=fgetc($fptr)){
//     echo $a;
// }
// echo "<br>";
// echo " End of the file has been reached";
// echo "<br>";


// Write a program which reads the content of a file until . (dot) has been encountered

while($a = fgetc($fptr)){
    echo $a;
    if ($a == "."){
        break;
    }
}
fclose($fptr);

?>