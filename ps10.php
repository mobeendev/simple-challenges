<?php

include 'functions.php';

echo "<h2>Anagram!</h2>\n";

dark();


   /* Anagram */
   
   $str1 = [1,2,7,3,3,4,4,5,1,2,3,4,5];
   
   $str2 = [34,2,7,3,3,4,4,5,1,2,3,4,5];
   


$str1 = 'ball';
$str2 = 'lbal';

$str1 = str_split($str1);
$str2 = str_split($str2);


   $length1 = count($str1);
   $length2 = count($str2);
   
   
  if($length1 != $length2)
        die(' not anagram');
   
   
   $map1 = $map2 = [];
   foreach($str1 as $val){
        if(!isset($map1[$val])){
            $map1[$val] = 1;
        }else{
            $map1[$val]++;
            
        }
   }
   
    foreach($str2 as $val){
        if(!isset($map2[$val])){

            $map2[$val] = 1;
        }else{
            $map2[$val]++;
            
        }
   }
   
 
print_array($map1);
nl();
print_array($map2);
nl();

   
   $isAnagram = true;
    foreach($map1 as $key=>$val){
        
        // print_r($map2[$key]);
        
        if(!isset($map2[$key]) || $map2[$key] != $map1[$key] ){
        
            $isAnagram = false;
         
        }
   }

   echo $isAnagram ? 'is a valid anagram' : ' not a valid anagram';


   
