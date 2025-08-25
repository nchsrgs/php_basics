<?php
    //different kinds of printing method in php

    echo 'Hello, World';
    print("Hello, Chos");

    // printf: formatted printing
    $name = "Nichos";
    printf("Hello, %s!" . $name);

    $fruits = ['apple', 'banana', 'cucumber'];

    // used for printing a content of arrays and objects
    // for debugging purposes
    print_r($fruits); 

    $number = 28;
    // useful for checking data types
    var_dump($number);

    
?>