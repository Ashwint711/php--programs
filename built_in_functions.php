<?php
//Built in Functions in php

//1. count() 
//Returns length of any iterable
$arr = array(11, 22, 33, 44);
$len = count($arr);
echo "Length of array is : $len";
echo "<br>";
//2. date()
//Resturn date, day and time in desired format
$date = date("l, dS F Y");
echo "Date is : $date";