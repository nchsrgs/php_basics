<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <div>
            <label for="">Select any title: </label><br>
              <input type="radio" value="PHP" name="title" id="">PHP Developer <br>
              <input type="radio" value="React" name="title" id="">React Developer <br>
              <input type="radio" value="Flutter" name="title" id="">Flutter Developer <br>
              <input type="radio" value="QA Automation" name="title" id=""> QA Automation Developer <br>
              <button type="submit" name="confirm" value="confirm">Confirm</button>
        </div>
    </form>

    <?php
        // check if the post method isset

        if(isset($_POST['confirm'])){
         $title = $_POST['title'];

          if($title == 'PHP'){
              echo "You selected the job: $title <br>";
              echo "You're expected salary is: Php 27,000"; 
          }
          else if($title == "React"){
              echo "You selected the job: $title <br>";
              echo "You're expected salary is: Php 29,000"; 
          }
          else if($title == "Flutter"){
              echo "You selected the job: $title <br>";
              echo "You're expected salary is: Php 24,000";
          }
          else if($title == "QA Automation"){
              echo "You selected the job: $title <br>";
              echo "You're expected salary is: Php 25,000";
          }

        }
    ?>
</body>
</html>