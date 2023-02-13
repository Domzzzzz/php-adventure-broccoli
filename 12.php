<?php

$password_length = 8;
$chars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), array('!', '@', '#', '$', '%', '^', '&', '*'));

$password = "";
for ($i = 0; $i < $password_length; $i++) {
  $password .= $chars[array_rand($chars)];
}

echo "The generated password is: " . $password;

?>
