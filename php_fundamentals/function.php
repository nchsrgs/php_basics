<?php

// defining function
function hello(){
    echo "Hello, World <br>";
}

function add(int $x, int $y): int{
  return $x + $y;
} 


echo add(21,25). "<br>";

function isAvailable(bool $cond): string{

  return $cond? "YES": "NO";
}
hello();
echo isAvailable(true);
?>