<?php

include 'functions.php';

$k = 3;
echo "<p>Remove repeated characters occouring k times  from string!</p>\n";
dark();
$str ='eaaabcbbhhdjdkkccdekeell';
$input = str_split($str);
echo $str;

nl();

echo " k = $k";

nl();

$length = count($input);
$map = [];

foreach ($input as $key => $value) {
   if (!isset($map[$value])) {
         $map[$value] = 1;
   } else {
         $map[$value]++;
   }   

   if ($map[$value] == $k) {
      unset($map[$value]);
   }
}

echo "<p>Final string!</p>";


// $uniqueString = implode(array_keys($map));

$finalString = '';

foreach ($map as $key => $value) {
   $finalString .= str_repeat($key, $value);
}

echo $finalString;

?>