<?php
$pin=12345;
$tries=0;
echo "WELCOME TO THE BANK OF MITCHELL\n";
$entry=readline("Enter your pin:");
$tries++;
while($entry != $pin && $tries<3){
  echo "\nINCORRECT PIN.TRY AGAIN\n";
  $entry=readline("ENTER YOUR PIN:");
  $tries++;
}
if($entry == $pin)
  echo "\nPIN ACCEPTED.YOU NOW HAVE ACCESS TO YOUR ACCOUNT";
else if($tries>=3)
  echo "\nYOU HAVE RUN OUT OF TRIES.ACCOUNT LOCKED";
?>