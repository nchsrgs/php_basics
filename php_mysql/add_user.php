<?php
    include("config/database.php");

    if(isset($_POST['signup'])){
        extract($_POST);
        $sql = "INSERT INTO users(username, password, email)
            VALUES ('$username', '$pass','$em') ";

        $result = mysqli_query($connect, $sql);

        if($result == true){
            echo "user has been created";
        }else{
            echo "failed to create user";
        }
    }
    mysqli_close($connect);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/add_user.css">
  <title>Register</title>
</head>
<body>
      <section>
          <h2>Register Form</h2>
          <form action="add_user.php" method="post">
              <div class="container">
                  <label for="uname"><b>username</b>:</label>
                  <input type="text" name="username" placeholder="enter username" required> <br>

                  <label for="passw"><b>password</b>:</label>
                  <input type="password" name="pass" placeholder="enter password" required><br>

                  <label for="email"><b>email</b>:</label>
                  <input type="email" name="em"  placeholder="enter email" required><br>

                  <button type="submit" name="signup">Sign Up</button>
              </div>
          </form>
          <div class="container footer">
                <a href="user.php" class="footerbtn">Users</a><br>
                <a href="logout.php" class="footerbtn logout">Log out</a>
          </div>
      </section>

</body>
</html>