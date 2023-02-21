<?php

$conn = new mysqli("localhost", "root", "", "empdata");

if (!$conn) {
    die("Sorry failed to connect.Error : " . mysqli_error($cocnn));
}
echo "Successfully connected to the database</br>";

$sql = "SELECT * FROM `mytable` WHERE `city`='Bhusawal' LIMIT 5";
$result = mysqli_query($conn, $sql);
$nums = mysqli_num_rows($result);
echo $nums;