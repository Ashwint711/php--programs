<?php

//Write progrma to demonstrate if-else if-else statement

$age = 76;

if( $age > 25 && $age < 65){
    echo "Congrats your are eligible to drive";
}else if( $age < 25){
    echo "You are too young to drive,try when you are above 25";
}else if( $age > 65){
    echo "You are too old to drive";
}

?>