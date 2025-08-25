<?php

    $novel_characters = array(

      "My Three Wives are Beautiful Vampires" => "Victor ElderBlood",
      "Supreme Harem God System" => "Nux Leander",
      "The Author's POV" => "Ren Dover",
      "Shattered Innocence" => "Lucavion",
      "Shadow Slave" => "Sunny"
    );


    foreach($novel_characters as $title => $Main_Character){
      echo "<p><b> $title: </b> $Main_Character</p>";
    }
/*
?>

<?php ; 
  
  foreach($novel_characters as $title => $Main_Character){
?>  
 <p?><b> <?php echo $title ?>:</b> <?php
 echo $Main_Character ?></p>

 <?php }

 */


?>