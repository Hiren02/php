<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts"; // use can use this database if database is pre-created.

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:<br> ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `contactus` WHERE `name`='hiren'";
$result = mysqli_query($conn , $sql);

// Usage of WHERE Clause to fetch data from the database
$num =  mysqli_num_rows($result);
echo $num . " record found in the database:";
echo "<br>";
$no=1;
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    while($row = mysqli_fetch_assoc ($result)){
        // echo var_dump($row);
        echo $no.  "  " . $row['name'] . "  " . $row['email'];
        echo "<br>";
        $no++;
    }

}

// Update data
$sql = "UPDATE `contactus` SET `name` = 'sanjay' WHERE `contactus`.`sno` = 7;";
$result = mysqli_query($conn , $sql);
echo $result ;
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: ". $aff;
echo "<br>";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not updated the record successfully";

}
?>