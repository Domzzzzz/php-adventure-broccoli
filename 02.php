<?php

echo "Enter a string: ";
$str = trim(fgets(STDIN));

$str_len = strlen($str);
$is_palindrome = true;

for ($i = 0; $i < $str_len / 2; $i++) {
  if ($str[$i] != $str[$str_len - $i - 1]) {
    $is_palindrome = false;
    break;
  }
}

if ($is_palindrome) {
  echo "The string is a palindrome.";
} else {
  echo "The string is not a palindrome.";
}

?>


