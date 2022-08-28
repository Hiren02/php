<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "form"; // use can use this database if database is pre-created.

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:<br> ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn , $sql);

// Find the number of records returned
$num =  mysqli_num_rows($result);
echo $num . " record found in the database";
echo "<br>";
// Display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'].  "  " . $row['name'] . "  " . $row['email'];
        echo "<br>";
    }

}
?>