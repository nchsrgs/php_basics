<?php
  $fruits = array("banana", "apple", "strawberry", "grapes","orange");

  echo $fruits[1]. "<br>";

  // looping through the array using foreach loops
  /*foreach($fruits as $fr){
    echo $fr . "<br>";
  }
    */
  // echo count($fruits); // shows the size of the array

  // Multidimentional array

  $foods = array(
    
    'vegetables' => array("Carrot", "tomato", "spinnach", "Cabbage"),
    'chocolates' => array("twixx", "toblerone", "kisses", "hersheys"),
    'rich protein foods' => array("chicken", "eggs", 'shrimp', 'tofu','salmon')
    
  );

  echo "<br>";

  foreach($foods as $foodType => $foodList){
    echo "<b> $foodType </b><br>";
    foreach($foodList as $key => $value){
      echo "$key : $value <br>";
    }
    echo "------<br>";
  }


  $languages = array("PHP","Python", "Java", "Javascript", "C#");

  if(in_array("PHP", $languages)){
    echo "Found Successfully. <br>";
  }else{
    echo "Cannot find in the array. <br>";
  }

  $names = array(1 => "Sasha Fulger", 2 =>"Violet Snow", 3 => "Ruby Scarlett");

  $key = array_search('Violet Snow', $names);
  if($key !== false){
    echo "The key associated with 'Violet Snow' is $key";
  }
  else{
    echo "'Violet Snow' is not found in the array";
  }

  

  $a = ['Main Protagonist','Main Wife','Second Wife','Third Wife'];
  $b = ['Victor', 'Violet', 'Ruby', 'Sasha'];

  // map function in arrays
  $new_array = array_map(fn($role,$name) => $role . ": " . $name, $a, $b);
  echo '<pre> <br>';
  print_r($new_array);
  echo '</pre>';


  // reduce function
  // good if you want to squeeze all the values into a single data
  $grades = array(99, 85,93,95,96,94,83);
  
  // this will add all the values within the array ($grades)
  $sum = array_reduce($grades, function($result, $grade){
    return $result + $grade;
  }, 0);
  
  // compute for the final grade
  $final_grade = $sum / count($grades);

  // format the final grade for 2 decimal values
  $formatted_average = number_format($final_grade, 2);

  // print statement
  echo '<pre> <br>';
  echo 'Final Grade: ';
  print_r($formatted_average);
  echo '</pre>';

?>