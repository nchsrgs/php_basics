<?php

  include('config/database.php');


  $sql = "DELETE FROM users WHERE id ='1'";
  
  $response = mysqli_query($connect, $sql);

  if($response == true){
    echo "user deleted from the database";
  }
  else{
    echo "Failed to delete the user from the database";
  }
  mysqli_close($connect);
?>