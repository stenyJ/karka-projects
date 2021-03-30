<?php
echo " x        y\n---------------\n";
for($x=-10.0; $x<=10; $x++){
  $sqr=$x*$x;
  echo str_pad($x,8);
  echo $sqr;
  echo "\n";
  $x=$x-0.5;
}
?>