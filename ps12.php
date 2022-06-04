<?php

include 'functions.php';

echo "<p>Product of Array Except Self!</p>\n";

// A positive natural number is known as Armstrong number of order n if it can be expressed as the sum of each digits of the number raised to the power of n. 

dark();
$randomNums = [0, 123,556, 1, 153, 370, 371,456, 938];
$originalNum = $number = $randomNums[mt_rand(0,count($randomNums) -1)]; 
   

echo "<p>Given Number $number</p>\n";


   $power = 3;
   
   $sum = 0;
   
   while($number !=0){
       
       $singleDigit = $number%10;
       
       $sum += pow($singleDigit, $power);
       
       $number = intdiv($number,10);
       
   }

  echo  ($sum == $originalNum) ? 'is Armstrong'  : ' not Armstrong';
   


?>