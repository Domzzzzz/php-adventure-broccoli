<?php

$input_array = array("apple", "banana", "cherry", "date");

$longest_string = "";


foreach ($input_array as $string) {
  if (strlen($string) > strlen($longest_string)) {
    $longest_string = $string;
  }
}


echo "The longest string in the input array is: " . $longest_string;

?>
