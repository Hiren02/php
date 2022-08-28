<?php 

// ***Writing to a file on php

// $fptr = fopen("file2.txt","w");
// fwrite($fptr, " This is the best file on this planet. Please dont aruge with me on this one.\n");
// fwrite($fptr,"This is another content\n");
// fclose($fptr);

// ***Appending to a file on php
// End me jod deta he or jitni bar refres hota hai utni bar add ho jata hai.
$fptr = fopen("file2.txt","a");
fwrite($fptr,"This is  being appended to the file\n");

fclose($fptr);

?>