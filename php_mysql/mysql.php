<?php
  include('config/database.php');

    // Inserting values into my server
  $sql = "insert into users(username,password) 
    values( 'Sasha', 'admin451') ";

    mysqli_query($connect, $sql);
    if($sql == true){
      echo "Data added Successfully";
    }
    else{
      echo "no data added";
    }

    mysqli_close($connect);
?>