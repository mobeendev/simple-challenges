<?php

echo "palindrome<br>";


 // $input = [1, 2, 3, 4, 5, 6, 7,8];

 $input = [1, 2,5,6,5, 2, 1];

 $length = count($input);

 $j = $length - 1;

 $isPal = true;
 for ($i=0; $i <($length/2); $i++) { 

 	// echo  $input[$i] . ' = ' . $input[$j];

 	if ($input[$i] != $input[$j]) {
 		$isPal = false;
 		break;
 	}
 	$j--;
 }


 if (!$isPal) {
 	echo " Not a palindrome";
 }else{
 	echo " Its a palindrome"; 	
 }
