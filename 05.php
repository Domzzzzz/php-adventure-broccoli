<?php

$input_array = array(1, 2, 3, 4, 5);

$sum = 0;


for ($i = 0; $i < count($input_array); $i++) {
  $sum += $input_array[$i];
}


echo "The sum of the elements in the input array is: " . $sum;

?>
