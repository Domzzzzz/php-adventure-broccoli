<?php

$input_string = "This is a sample string";


$vowels = array("a", "e", "i", "o", "u");


$output_string = str_replace($vowels, "", $input_string);


echo "The input string with all vowels removed is: " . $output_string;

?>
