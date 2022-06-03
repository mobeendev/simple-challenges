<?php

include 'functions.php';

echo "<p>Product of Array Except Self!</p>\n";

dark();


$input=[2, 3, 5, 6];

$length = count($input);

$productArr = [];

for ($i=0; $i <($length); $i++) { 
        
        $product = 1;
    
    for ($j=0; $j <($length); $j++) { 
        if($j != $i){
            $product *= $input[$j];
            
        }
    }
     
     $productArr[]  = $product;  

}

print_array($input);
nl();
print_array($productArr);

?>