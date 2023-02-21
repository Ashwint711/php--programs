<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "empdata";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn == NULL) {
    dir("Sorry failed to connect!</br>error" . mysqli_error($conn));
} else {
    echo "Connection established successfully</br>";
}

//Creating new table

$sql = "CREATE TABLE emps(sno INT(2) PRIMARY KEY AUTO_INCREMENT, names VARCHAR(30) NOT NULL, post VARCHAR(20) NOT NULL )";

//Executing sql query

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Table created successfully</br>";
} else {
    echo "Failed to create table</br>";
}

//Adding record to the table [emps]

$sql = "INSERT INTO `emps`(`sno`,`names`,`post`) VALUES (NULL,'Garry','SDE')";

//Executing sql query

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record added successfully</br>";
} else {
    echo "Falied to add record</br>error : " . mysqli_error($conn);
}