<?php

$n = 10;

$triangular_number = 0;

// Calculate and output the first n triangular numbers
for ($i = 1; $i <= $n; $i++) {
  $triangular_number += $i;
  echo "The " . $i . "th triangular number is: " . $triangular_number . "\n";
}

?>
