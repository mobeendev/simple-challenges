<?php

include 'functions.php';

echo "<h2>Top K Frequent Elements!</h2>\n";

// https://www.geeksforgeeks.org/find-k-numbers-occurrences-given-array/

dark();

   
   $arr = [7, 10, 11, 5, 2, 5, 5, 7, 11, 8, 9]; // k = 4
   $k = 4;



   $arr = [3, 1, 4, 4, 5, 2, 6, 1]; // k =2
   $k = 2;
   
   print_array($arr);
   nl();   
   echo " k = $k ";
   nl();   

   $map1 = [];
   foreach($arr as $val){
        if(!isset($map1[$val])){
            $map1[$val] = 1;
            // $map1[$val]['val'] = $val ;
        }else{
            $map1[$val]++;           
        }
   }
   
   
 
// print_r($map1);
// print_array($map1);
nl();


$heap = new SplMaxHeap();
foreach($map1 as $num=>$val){
   
   $heap->insert($val);

 }


asort($map1);
 echo  "<pre>";

// print_r($map1);


$resultMap = [];

$counter = 0;

while ($heap->valid() && $counter < $k) {
      $index =  $heap->current();
             $resultMap[] = $index;
  $heap->next();
  $counter++;
}
   
// print_r($resultMap);


sort($resultMap);

$arr = [];
$index = 0;

echo "Result: <br>";

foreach($map1 as $key => $val){
            if ($val == $resultMap[$index]) {
                   // echo '  -- found   ';
                    echo $key . ',';
                  $index++;
            }

            if ($index > count($resultMap)) {
               break;
            }
 }
