<?php
echo "TWO MORE QUESTIONS, BABY!\n\nThink of something and I'll trey to guess it!\n\n";
$get1=readline("Question 1) Does it stay inside or outside or both?");
$get2=readline("Question 2) Is it a living thing?");
if($get1=="inside"){
if($get1=="inside" && $get2=="yes")
 print_r("houseplant");
else
print_r("shower curtain");
}
if($get1=="outside"){
if($get1=="outside" && $get2=="yes")
 print_r("bison");
else
print_r("billiboard");
}
if($get1=="both"){
if($get1=="both" && $get2=="yes")
 print_r("dog");
else
print_r("cell phone");
}
?>