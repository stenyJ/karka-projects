<?php
echo "WELCOME TO MITCHELL'S TINY ADVENTURE!\n\n";
echo "You are in a creepy house! Would you like to go \"upstairs\" or into the \"kitchen\"?\n";
$k_or_u=readline(">");

if($k_or_u=="kitchen"){
  echo "There is a long countertop with dirty dishes everywhere.Off to one side there is, as you'd expect, a refrigerator.\nYou may open the \"refrigerator\" or to look in \"cabinet\".\n";
  $r_or_c=readline(">");
  if($r_or_c=="refrigerator"){
    print_r("Inside refrigerator you see food and stuff.It looks pretty nasty.\n");
    $yes_no=readline("Would you like to eat some of the foood? (yes or no)");
    if($yes_no=="yes"){
      print_r("Take what you need.");
    }else{
      print_r("You die of starvation...eventually.");
    }
  }
  else if($r_or_c=="cabinet"){
exit();
  }
}
?>
