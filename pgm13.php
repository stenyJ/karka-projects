<?php
echo "TWO QUESTIONS!\nThink of an object, and I'll try to guess it.\n";
echo "Question 1) Is it animal, vegetable, or mineral?\n";
$get=readline(">");

if($get=="animal"){
  echo "Question 2) Is it bigger than a breadbox?\n";
  $get2=readline(">");
  if($get2=="yes"){
    echo "My guess is that you are thinking of a mouse.\nI would ask you if I'm right,but I don't actually care.";
  }else{
    echo "My guess is that you are thinking of a squirrel.\nI would ask you if I'm right,but I don't actually care.";
  } 
}

else if($get=="vegetable"){
  echo "Question 2) Is it bigger than a breadbox?\n";
  $get2=readline(">");
  if($get2=="yes"){
    echo "My guess is that you are thinking of a watermelon.\nI would ask you if I'm right,but I don't actually care.";
  }else{
    echo "My guess is that you are thinking of a carrot.\nI would ask you if I'm right,but I don't actually care.";
  } 
}

else if($get=="mineral"){
  echo "Question 2) Is it bigger than a breadbox?\n";
  $get2=readline(">");
  if($get2=="yes"){
    echo "My guess is that you are thinking of a paper clip.\nI would ask you if I'm right,but I don't actually care.";
  }else{
    echo "My guess is that you are thinking of a Camaro.\nI would ask you if I'm right,but I don't actually care.";
  } 
}
