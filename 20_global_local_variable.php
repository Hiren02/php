<?php

// local variable- je variable  sirf function le andar define karte he or usi keliye use karte h

// global variable - je variable bar define karye ae aene game tyre use kari sakay.  


$a = 98;  // Global variable

function printV(){
    // $a = 45;  // local variable
    global $a;  // calling the global variable
    echo "The value of your variable is $a";
}

echo $a;
echo "<br>";
printV();

?>