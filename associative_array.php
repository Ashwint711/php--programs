<?php

echo "Program of Associative Array <br/>";

$a_arr = array(
    "ASUS" => "Ashwin",
    "HP" => "Pratham",
    "Dell" => "Rohit",
    "ROG" => "Vishal",
    11 => "Eleven",
);

echo $a_arr["ASUS"] . "<br/>";
echo var_dump($a_arr["HP"]) . "<br/>";
echo $a_arr[11] . "<br/>";

//Printing key value pairs using foreach loop

foreach($a_arr as $key => $value){
    echo "Key : $key , Value : $value <br/> ";
}

?>