<?php


// readfile("file.txt");

$fptr = fopen('file.txt',"r");
// echo var_dump($fptr);
if (!$fptr){
    die("Unable to open the file.please enter a valid filename");
}
$content = fread($fptr,filesize("file.txt"));
echo $content;

?>
