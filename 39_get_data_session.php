<?php


session_start();
if(isset($_SESSION['username'])){

    echo "Welcome " .$_SESSION['username'];
    echo "<br> Your favorite category is " . $_SESSION['favCat'];
    echo "<br>";
}
else{
    echo "please login to continue";
}
?>