<?php
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO-->php data obeject
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "hiren"; // use can use this database if database is pre-created.

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful";
// }

// Create a db
// $sql = "CREATE DATABASE bdhiren";
// mysqli_query($conn, $sql); 


// $result = mysqli_query($conn , $sql);
// if ($result){
//         die("successfully inserted: ");
//     }
//     else{
//         echo "Connection was faild:".mysqli_error($conn);
//     }

// Create a table in the db
// $sql = "CREATE TABLE `phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))";

// $result = mysqli_query($conn , $sql);
// if ($result){
//         die("successfully inserted: ");
//     }
//     else{
//         echo "Connection was faild:".mysqli_error($conn);
//     }


//insert into the db
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('manan', 'dubai')";
$result = mysqli_query($conn , $sql);
if ($result){
        die("successfully inserted: ");
    }
    else{
        echo "Connection was faild:".mysqli_error($conn);
    }
?>