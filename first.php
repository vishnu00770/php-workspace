<?php
echo "My Name is VishnuWardhan \n";

echo 'Hello I am "Jhon Doe" and ';
echo "Hello I am 'Jhon Doe'\n";


const num=7;
$p=readline("Enter Principal Amount: ");
$t=readline("Enter Time in years: ");
$r=readline("Enter Rate of Interest: ");
echo "Simple Intrest is: " . ($p*$t*$r)/100 ;

echo "\n";

$number=readline("Enter a nuber: ");
echo "Square of the number $number is : ". $number**2 ."\n";

$firstName=readline("Enter Your First Name: ");
$lastName=readline("Enter Your Last Name: ");
echo "Hello $firstName $lastName \n";


$num1=10;
$num2=3;
echo "Quotient of $num1 and $num2 is : " .$num1/$num2."\n";
echo "Remainder of $num1 and $num2 is : " .$num1%$num2."\n";


$a=readline("Enter a number a: ");
$b=readline("Enter a number b: ");
echo "Before Swapping: a=$a and b=$b \n";
$a=($a+$b)-($b=$a);
echo "After Swapping: a=$a and b=$b \n";

$input=readline("Enter a String with spaces: ");
$input=str_replace(" ","",$input);
echo "String after removing spaces: $input \n";












?>