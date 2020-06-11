<?php

// Complete the staircase function below.
function staircase($n) {

    for($i=1; $i<=$n; $i++) 
    {
        for($y=1; $y <= ($n-$i); $y++)
        {
            echo " ";
        }
        for($p = 1; $p <= $i; $p++)
        {
            echo "#";
        }
        echo "\n";
    }
  

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);

