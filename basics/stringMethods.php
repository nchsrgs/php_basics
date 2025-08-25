<?php
  $string = 'hello, World';

  echo $string . "<br>";

  $length = strlen($string);

  echo "The length of the string is: $length <br>";
  echo "The reversed version of the string is: " . strrev($string). "<br>";
  echo "The position of the word(world) is: " . strpos($string, "World") . "<br>"; 
?>