<?php

echo "All about dates <br/>";

echo "Todays date is : " . date("l, dS F Y , h:i:s") . "<br/>";

echo "July 11, 2000 is on " . date("l",mktime(0,0,0,7,11,2000));

?>