<?php
$pin=12345;
echo "WELCOME TO THE BANK OF MITCHELL.\n";
$entry=readline("ENTER YOUR PIN:");
while($entry != $pin){
 echo "\nINCORRECT PIN.TRY AGAIN.";
 $entry=readline("ENTER YOUR PIN:");
 }
echo "\nPIN ACCEPTED.YOU NOW HAVE TO ACCESS YOUR ACCOUNT.";
?>
