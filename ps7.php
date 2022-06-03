<?php



// "Find Maximum Two Sum Less Than K"

// Given an array arr of size N and an integer K. The task is to find the pair of integers such that their sum is maximum and but less than K

// Examples: 

// Input : arr = {30, 20, 50} , K = 70 
// Output : 30, 20 
// 30 + 20 = 50, which is the maximum possible sum which is less than K
 

// Input : arr = {5, 20, 110, 100, 10}, K = 85 
// Output : 20, 10 

include 'functions.php';

$k = 85 ;

echo "Maximum Two Sum Less Than K = $k"; 

nl();


dark();

$input = [5, 43, 55, 100, 32];


$length = count($input);



print_array($input);

nl();
nl();


$result = [];

$left = 0;

$right = $length-1;

$maxsum = -1;


$array = [];

while ($left < $right) {

    $currentSum = $input[$left] + $input[$right];

    if ($currentSum > $k) {
        $right--;
    } else if ($currentSum < $k) {
    	$maxsum = $currentSum;
    	 $array = [$left, $right];
        $left++;
    }
}


print_array($input);

echo " max sum found => $maxsum "; 	
nl();
print_r($array);


nl();

print_array($result);

nl();


?>















