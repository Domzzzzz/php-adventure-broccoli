<?php

echo "Enter a character: ";
$char = trim(fgets(STDIN));

if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' ||
    $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U') {
  echo "The character is a vowel.";
} else {
  echo "The character is a consonant.";
}

?>


