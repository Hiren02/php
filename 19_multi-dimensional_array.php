<?php

// Creating a 2 dimensionals array
$multiDim = array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1)
                );
// echo var_dump($multiDim);

// echo $multiDim[0][1];


// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }


// for ($i=0; $i < count($multiDim); $i++) { 
//     for ($j=0; $j < count($multiDim[$i]); $j++) { 
//         echo $multiDim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }



// creating a 3 dimensional array
$multiDim1 = array(array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1))
);

for ($i=0; $i < count($multiDim1); $i++) { 
    for ($j=0; $j < count($multiDim1[$i]); $j++) { 
        for ($k=0; $k < count($multiDim1[$i][$j]); $k++) { 
            
            echo $multiDim1[$i][$j][$k];
            echo " ";
        }
    }
    echo "<br>";
}

?>