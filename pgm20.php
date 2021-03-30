<?php
echo "I will add up the numbers you give me.\n";
$sum=0;
$num=readline("Number:");
while($num !=0){
 $sum=$sum+$num;
 echo "The total so far is $sum\n";
 $num=readline("Number:");
}
echo "The total is $sum";
?>