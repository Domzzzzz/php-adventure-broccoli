<?php

$input_array = array(1, 2, 3, 4, 5);


sort($input_array);


$array_length = count($input_array);


if ($array_length % 2 == 0) {
  $median = ($input_array[$array_length / 2 - 1] + $input_array[$array_length / 2]) / 2;
} else {
  $median = $input_array[($array_length - 1) / 2];
}


echo "The median of the input array is: " . $median;

?>
