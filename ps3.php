<?php

echo "fibonacci series<br>";


$range = 20;

$first = 1;

$second = 1;


echo 'series: '. $first . ' ' . $second; 


 for ($i=0; $i < $range; $i++) { 

    $next = $first + $second;

    $first = $second;

    $second = $next;

        echo     ' ' . $next . ' '; 
 }
