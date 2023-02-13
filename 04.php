<?php

$input_number = 12345;

$sum = 0;


while ($input_number > 0) {
  $digit = $input_number % 10;
  $sum += $digit;
  $input_number = (int)($input_number / 10);
}


echo "The sum of the digits of the input number is: " . $sum;

?>
