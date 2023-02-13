<?php

$input_string = "example string";

$char_frequency = array();


for ($i = 0; $i < strlen($input_string); $i++) {
  $char = $input_string[$i];
  if (!array_key_exists($char, $char_frequency)) {
    $char_frequency[$char] = 1;
  } else {
    $char_frequency[$char]++;
  }
}

foreach ($char_frequency as $char => $frequency) {
  echo $char . ": " . $frequency . "\n";
}

?>

