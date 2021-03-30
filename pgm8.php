<?php
$name=readline("Hey, What's your name?");
$age=readline("ok, $name, how old are you?");
if($age<16){
echo "You can't drive $name.\n";
}
if($age<18){
echo "You can't vote $name.\n";
}
if($age<25){
echo "You can't rent a car $name.\n";
}
else{
echo "You can vote,drive and rent a car $name.";
}
?>