<?php

echo "PHP program to establish connection to the database</br>";
/* Using MYSQLi Extension */
//For establishing connection we need 3 parameters
//1.server
//2.username
//3.password
$server = "localhost";
$username = "root";
$password = "";

//For connecting create a connection object
$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect to the database : " . mysqli_connect_error());
}
echo "Connection Successful</br>";