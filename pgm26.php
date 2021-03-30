<?php
print_r("Ye Olde Keychain Shoppe\n");

function add_keychains(){
   print_r("\nADD KEYCHAINS\n");
}

function remove_keychains(){
   print_r("\nREMOVE KEYCHAINS\n");
}

function view_order(){
print_r("\nVIEW ORDER\n");
}

function checkout(){
print_r("\nCHECKOUT");
}
do{
print_r("\n1. Add Keychains to order\n");
print_r("2. Remove Keychains from order\n");
print_r("3. View Current Order\n");
print_r("4. Checkout\n");
$choice=readline("Please enter your choice:\n");
switch($choice){
  case "1":
    add_keychains();
    break;
  case "2":
    remove_keychains();
    break;
  case "3":
    view_order();
    break;
  case "4":
    checkout();
    break;
default:
  break;
}
}while($choice != 4)
?>