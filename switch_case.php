<?php

$num1 = 10;
$num2 = 5;
$ch = '+';

switch( $ch )
{
    case '+':
        echo "Addition of $num1 and $num2 is : " . $num1 + $num2 . "<br/>";
        break;
    case '-':
        echo "Subtraction of $num1 and $num2 is : " . $num1 - $num2 . "<br/>";
        break;
    case '*':
        echo "Multiplication of $num1 and $num2 is : " . $num1 * $num2 . "<br/>";
        break;
    case '/':
        echo "Division of $num1 and $num2 is : " . $num1 / $num2 . "<br/>";
        break;
    default:
        echo "This is default case";       
}
?>