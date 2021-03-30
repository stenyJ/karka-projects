<?php
$f_name=(string)readline("First Name:");
$l_name=(string)readline("Last Name:");
$grade=(int)readline("Grade (9-12):");
$id=(int)readline("Student ID:");
$login=readline("Login:");
$gpa=(float)readline("GPA (0.0-4.0):");
echo "\nYour information:\n";
print_r("     Login:$login\n");
print_r("     ID:   $id\n");
print_r("     Name: $f_name $l_name\n");
print_r("     GPA:  $gpa\n");
print_r("     Grade:$grade");
?>