<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts"; 

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:<br> ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "DELETE FROM `contactus` WHERE `name` = 'manan' LIMIT 3";
$result = mysqli_query($conn , $sql);
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: ". $aff;
echo "<br>";

if($result){
    echo "Delete Successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error-->$err";
}
?>