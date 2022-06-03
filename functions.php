<?php

function nl()
{
	echo "<br>";
}

function dark()
{ 
	echo "<style>
body {
  padding: 25px;
  background-color: black;
  color: white;
  font-size: 18px;
}
</style>";

}

// Array printer function.
// This function accepts an array as input and prints each value of the array.
function print_array($array_in) {
  foreach ($array_in as $value) {
    print($value);
    print(', ');
  }
  // print('<br>');
}


