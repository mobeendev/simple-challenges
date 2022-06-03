<?php


echo "<pre>";

$a = array('2017-06-10','02:00 PM','05:00 PM');
$b = array('2017-06-11','03:00 PM','06:00 PM');
$c = array('2017-06-12','04:00 PM','07:00 PM');

$c=array_map(null,$a,$b,$c);

print_r($c);


