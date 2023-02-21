<?php
//String Functions
$str = "Ashwin Sarangdhar Tirpude";
echo $str;
//1.strlen() function
$len = strlen($str);
echo "<br>Length of $str is $len";
echo "<br>";

//2.str_word_count()
$msg = "Hi Mr. $str welcome to India";
$words = str_word_count($msg);
echo "Total words in string '$msg' are : $words ";
echo "<br>";

//3. strrev()
$rev = "dlroW";
$rev = strrev($rev);
echo $rev;
echo "<br>";