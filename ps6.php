<?php



// "Degree of an Array"

// This is a sample question and not part of your interview.


// Given a non-empty array N, of non-negative integers , the degree of this array is defined as the maximum frequency of any one of its elements. Your task is to find the smallest possible length of a (contiguous) subarray of N, that has the same degree as N. For example, in the array [1 2 2 3 1], integer 2 occurs maximum of twice. Hence the degree is 2.

// Input

// Test case input contains 2 lines.
// First line contains an integer T, representing the number of elements in the array.
// The second line contains the array N, list of T integers each separated by space.

// Output

// Print the length of the smallest contiguous subarray of input array N, that has the same degree as N.
// Code evaluation is based on your output, please follow the sample format and do NOT print anything else.

include 'functions.php';

echo "Degree of an Array"; 

nl();
dark();

$input = [3, 2, 2,3,3,3,2,2,2,2,2,2,2,3,3,3,4,4,4,4,4,4,4,4,];

$length = count($input);


$tempArr = array_map(function() {
    return -1; 
}, range(1,$length));



print_r($input);
nl();
// print_r($tempArr);
nl();


for ($i=0; $i < $length ; $i++) { 

	if ($tempArr[$input[$i]] == -1) {
		$tempArr[$input[$i]] = 1;
	}else{
		$tempArr[$input[$i]] = ++$tempArr[$input[$i]];
	}

}

print_r($tempArr);

$ans = [];
		for($i= 1; $i< ($length-1); $i++){
				if($tempArr[$i] != -1){    
						$ans = [$i,$tempArr[$i]];
	            break;
  			}			
		}	



nl();

print_r($ans);

















