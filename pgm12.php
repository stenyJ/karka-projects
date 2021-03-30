<?php
$count_correct=0;
$count_wrong=0;
$ready=readline("Are you ready for a quiz (yes/no) :");
if($ready=="yes")
{
  print_r("Here it comes!\n\n");
print_r(("Q1) What is the capital of Alaska?\n     1)Melbourne\n     2)Anchorage\n     3)Juneau\n"));
$ans1=readline(">");
if($ans1=="3")
{
  $count_correct+=1;
  print_r("\nThat's right!\n");
}else{
   $count_wrong+=1;
   print_r("\nSorry,It's wrong!\n");  
}
print_r(("\nQ2) Can you store the value \"cat\" in a variable of type int?\n     1)yes\n     2)no\n"));
$ans2=readline(">");
if($ans2=="2"){
   $count_correct+=1;
   print_r("\nThat's right!\n");
}else{
   $count_wrong+=1;
   print_r("\nSorry, \"cat\" is a string.ints can only store number.\n");
}
print_r("\nQ3) What is the result of 9+6/3?\n     1)5\n     2)11\n     3)15/3\n");
$ans3=readline(">");
if($ans3=="2"){
  $count_correct+=1;
  print_r("\nThat's correct!\n");
}else{
$count_wrong+=1;
print_r("\nSorry,It's wrong!\n"); 
}
print_r("\nOverall, you got $count_correct out of 3 correct and $count_wrong wrong");
print_r("\nThanks for playing!");
}
else{
exit();
}