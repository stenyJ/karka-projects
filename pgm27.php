<?php
$current_no_keychains=0;
$price=10;
print_r("Ye Olde Keychain Shoppe\n");

function add_keychains(){
   global $current_no_keychains,$price;
   print_r("\nYou have $current_no_keychains keychains. ");
   $add=readline("How many to add?");
   $current_no_keychains=$current_no_keychains+$add;
   print_r("You now have $current_no_keychains keychains.\n");
}

function remove_keychains(){
   global $current_no_keychains,$price;
   print_r("\nYou have $current_no_keychains keychains. ");
   $remove=readline("How many to remove?");
   $current_no_keychains=$current_no_keychains-$remove;
   print_r("You now have $current_no_keychains keychains.\n");   
}

function view_order(){
  global $current_no_keychains,$price;
  print_r("\nYou have $current_no_keychains keychains.\nKeychains cost $$price each.\n");
  $total=$current_no_keychains * $price;
  print_r("Total cost is $$total.\n");
}

function checkout(){
  global $current_no_keychains,$price;
  print_r("\nCKECKOUT\n");
  $name=readline("What is your name?");
  print_r("\nYou have $current_no_keychains keychains.\nKeychains cost $$price each.\n");
  $total=$current_no_keychains * $price;
  print_r("Total cost is $$total.\nThanks for your order,$name!");
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