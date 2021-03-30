<?php
$name=readline("Hey, What's your name? (Sorry, I keep forgetting.)");
$age=readline("ok, $name, how old are you?");
if($age<16){
echo "You can't drive $name.\n";
}
else if($age<18){
echo "You can drive but you can't vote, $name.\n";
}
else if($age<25){
echo "You can vote but not rent a car $name.\n";
}
else{
echo "You can do pretty much anything, $name.";
}
?> 