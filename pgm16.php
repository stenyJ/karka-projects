<?php
$gender=readline("What is your gender (M or F):");
if($gender=="F"){
  $fname=readline("First Name:");
  $lname=readline("Last Name:");
  $age=readline("Age:");
  if($gender=="F" && $age>=20){
    $maritalstatus=readline("Are you married, $fname (y or n)?");
    if($maritalstatus=="y")
      echo "Then I shall call you Mrs.$lname.";
    else
      echo "Then I shall call you Ms.$lname.";
  }else{
    echo "Then I shall call you $fname $lname";
}
}

if($gender=="M"){
  $fname=readline("First Name:");
  $lname=readline("Last Name:");
  $age=readline("Age:");
  if($gender=="M" && $age>=20){
    echo "Then I shall call you Mr.$lname.";
  }else{
    echo "Then I shall call you $fname $lname";
}
}
?>