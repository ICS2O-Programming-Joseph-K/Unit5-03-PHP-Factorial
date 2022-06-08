<?php

//variables
$answer = 1;

// get the user's first integer 
$userNum = intval($_POST["number"]);

if ($userNum > 0){
  //do while loop
do {
  //build the equation for the factorial
  $answer = $answer * $userNum;
  $userNum = $userNum - 1;

} while ($userNum > 0);
}


//display the answer
echo $answer;

?>
