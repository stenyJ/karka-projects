<?php
echo "I'm thinking of a number between 1-100. You have 7 guesses.\n";
$random=80;
$tries=0;
$no=2;
$num=readline("First guess:");
if($num<$random)
    echo "Sorry,you are too low.\n";
  else
    echo "Sorry,you are too high.\n";
$tries++;

while($num != $random && $tries<7){
  $num=readline("Guess #$no:");
  $tries++;
  if($num==$random){
    echo "You guessed it!";
    break;
}
  if($num<$random)
    echo "Sorry,you are too low.\n";
  else
    echo "Sorry,you are too high.\n";
  $no++;
}
if($tries>=7)
echo "Sorry, you didn't guess it in 7 tries. You lose";

?>