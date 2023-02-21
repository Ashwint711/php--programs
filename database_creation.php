<?php

//Database creation

$server = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server, $username, $password);

if ($conn == NULL) {
    echo "Failed to connect. error : " . $conn->connect_error();
}
echo "Connection successful</br>";

//Creating database

$sql = "CREATE DATABASE EmpData";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Database creation successful</br>";
} else {
    echo "Failed to create database!</br>";
}