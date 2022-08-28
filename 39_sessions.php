<?php

// Session
// Used to manage information across different pages

session_start();

$_SESSION['username'] = "Hiren";
$_SESSION['favCat'] = "web development";
echo "We have saved your session";
?>