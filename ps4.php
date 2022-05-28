<?php
include 'functions.php';

echo "Target Sum"; 

nl();


$input = array_map(function() {
    return mt_rand(1,50); 
}, range(1,10));



sort($input);


print_r($input);


$length = count($input);

$targetSum = mt_rand(1,50);

nl();

echo "Target Sum $targetSum" ;  nl();


$left = 0;

$right = $length-1;

$found = false;


$array = [];

while ($left < $right) {

    $sum = $input[$left] + $input[$right];

    if ($sum > $targetSum) {
        $right--;
    } else if ($sum < $targetSum) {
        $left++;
    } else if ($sum == $targetSum) {
        $found = true;

        $array = [$left, $right];


        break;
    }
}

if (!$found) {
	echo " required sum not found";
}else{
	echo " sum found => "; 	
    print_r($array);
}
