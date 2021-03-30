<?php
$weight=readline("Please enter your current earth weight:");
print_r("I have information for the following planets:\n   1.Venus    2.Mars     3.Jupiter\n   4.Saturn   5.Uranus   6.Neptune\n\n");
$planet=readline("Which planet are you visiting?");
switch($planet){
   case "1":
     $planet_weight=$weight*0.78;
     break;
   case "2":
     $planet_weight=$weight*0.39;
     break;
   case "3":
     $planet_weight=$weight*2.65;
     break;
   case "4":
     $planet_weight=$weight*1.17;
     break;
   case "5":
     $planet_weight=$weight*1.05;
     break;
   case "6":
     $planet_weight=$weight*1.23;
     break;
default:
   print_r("Enter valid data");
}
echo "\nYour weight should be $planet_weight pounds on that planet.";
?>