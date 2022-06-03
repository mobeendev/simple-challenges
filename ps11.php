<?php
   /* Online PHP Compiler (Interpreter) and Editor */
   include 'functions.php';

echo "<h2>Kadanes Algorithm!</h2>\n";

dark();


   echo "<p>Largest Sum Contiguous Subarray!</p>\n";

   
    $input = [-2, -3, 4, -1,-2, 1, 5, -3];

     $length = count($input);
    
    
    $currentMax =0;
    $globalMax =0;


for ($i=0; $i <($length); $i++) { 
    $currentMax = max($input[$i], $currentMax + $input[$i]);
    $globalMax = max($globalMax, $currentMax);
}

print_array($input);
   
   nl();
   
   echo "max array sum $globalMax";
   
   
?>