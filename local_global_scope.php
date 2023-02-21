<?php

//Array in php
//sort given array
$arr = array(11, 44, 33, 22);
echo var_dump($arr);
echo "<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = $i + 1; $j < 4; $j++) {
        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

echo var_dump($arr);
echo "<br>";
$b = false;
echo var_dump($b);