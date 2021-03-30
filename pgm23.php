<?php
for($i=1; $i<=100; $i++){
  if($i%3 ==0 && $i%5 ==0){
    print_r("\nFizzBuzz");
  }
  else if($i%3 == 0){
    print_r("\nFizz");
  }
  else if($i%5 ==0){
    print_r("\nBuzz");
  }
  else{
    print("\n");
    print_r($i);
    
}
}
?>