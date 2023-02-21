<?php

$fruits = array("Banana","Apple","Grapes","Watermelon");

for($i = 0; $i < 4; $i++){
    echo $fruits[$i] . "<br/>";
}

echo "<br/>";

foreach($fruits as $v){
    echo "$v <br/>";
}

?>