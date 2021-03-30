<?php
function triangleArea($a,$b,$c){
   $s=($a+$b+$c)/2;
   $area=sqrt($s($s-$a)($s-$b)($s-$c));
   echo $area;
}
triangleArea(5,4,3);
?>