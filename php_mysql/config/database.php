<?php

    // this file is in the config file
    // Config files in PHP are like a control center where you keep all important settings 
    // in one place so your code stays clean, easy to update, and secure.


    $servername = "localhost";
    $username = "root";
    $password = 'nchsrgs2803';
    $dbname = "php_essentials";

    try{
        $connect = mysqli_connect(
          $servername,
          $username,
          $password,
          $dbname
        );
    }catch(mysqli_sql_exception){
      echo "Cannot connect in the server <br>";
    }
?>