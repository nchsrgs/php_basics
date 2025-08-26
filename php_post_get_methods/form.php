<?php
    /*
     echo "<pre>";
     print_r($_GET);
     echo "</pre>";
     */


      // use the isset method to avoid having an error
     if(isset($_GET['submit'])){ 

        //$_GET - retrieves data from the server
        echo $_GET['username'] . "<br>";
        echo $_GET['password'] . "<br>";
        echo $_GET['email'] . "<br>";
     }

     // use $_POST if you want to send data from the server
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
    <form action="postmethod.php" method="POST">
        <div>
            <label for="" >username: </label>
            <input type="text" name="username" placeholder="enter your username " >
        </div>
        <br>
        <div>
            <label for="" >password: </label>
            <input type="password" name="password" placeholder="enter your password">
        </div>
          <br>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" placeholder="enter your email">
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Login</button>
        </div>
          <br>
    </form>
    <a href="./form.php">Homepage</a>
</body>
</html>