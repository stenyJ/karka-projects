<?php
$height=readline("Your height in m:");
$weight=readline("Your weight in kg:");
$bmi=round($weight/($height*$height),5);
echo "\nYour BMI is $bmi\n";
if($bmi<18.8)
  echo "BMI category:underweight";
else if($bmi<24.9)
  echo "BMI category:normal weight";
else if($bmi<29.9)
  echo "BMI category:overweight";
else
  echo "BMI category:obese";
?>