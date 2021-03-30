<?php
$height=readline("Your height in m:");
$weight=readline("Your weight in kg:");
$bmi=round($weight/($height*$height),5);
echo "\nYour BMI is $bmi";
?>