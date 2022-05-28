<?php

include 'functions.php';

echo "Rotate Array"; 

nl();

 $input = [22,32,34,37,44,5];

 $length = count($input);

 $rotations = 3;


print_r($input);


$tempArr = array_fill(0, $length,-1);


for ($i=0; $i <($length); $i++) { 

    $newIndex = ($i+$rotations)%$length;
    $tempArr[$newIndex] = $input[$i];

}

nl();

for($i= 0; $i< ($length); $i++){
        
    $input[$i] = $tempArr[$i]; // swap numbers

}

print_r($input);

