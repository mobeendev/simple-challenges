<?php

include 'functions.php';

echo "<p>Max sum of Array Except Self!</p>\n";

dark();


$input=[1,-1,-2,3,7,1];

$length = count($input);

$maxSumArr = [];

$maxSum = 0;

for ($i=0; $i <($length); $i++) { 
        
        $sum = 0;
    
    for ($j=0; $j <($length); $j++) { 
        if($j != $i){
            $sum += $input[$j];
            
        }
    }
     
     $maxSumArr[]  = $sum;  

     $maxSum = max($maxSum, $sum);

}

print_array($input);
nl();
print_array($maxSumArr);
nl();

echo $maxSum;
?>