<?php 

  // 3 kinds of looping in php

  // while loop
  // it will check the condition first before running

  $x = 0;
  while($x !== 10){
    
    echo "This will keep running until the assigned number. <br>";
    $x++;
  }

  // do-while loop
  // it will run first before checking the condition
  do{
    echo "Hello, World <br>";
    $x++;

  } while($x <5);
  
  // For loop
  // this will run until the condition set upon it is checked.

  for($i = 0; $i <= 10;$i++){
    echo "programming is awesome <br>";
  } 
?>