<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "empdata"; //database name

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn == NULL) {
    die("Sorry we are failed to connect,error : " . mysqli_connect_error());
}
echo "Connection successful</br>";

$students = array(
    array(1, 'Rahul', 'Sector 14', 'O+'),
    array(2, 'Rakesh', 'Sector 14', 'AB+'),
    array(3, 'Remaesh', 'Sector 14', 'O-'),
    array(4, 'Suresh', 'Sector 14', 'A+'),
    array(5, 'Aakash', 'Sector 14', 'B+'),
    array(6, 'Renuka', 'Sector 14', 'O+'),
    array(7, 'Riya', 'Sector 14', 'O+'),
    array(8, 'Puja', 'Sector 14', 'O+'),
    array(9, 'Angel', 'Sector 14', 'O+'),
    array(10, 'Ketty', 'Sector 14', 'O+'),
);

for ($i = 0; $i < count($students); $i++) {
    $roll = $students[$i][0];
    $name = $students[$i][1];
    $address = $students[$i][2];
    $blood_group = $students[$i][0];
    $sql_query = "INSERT INTO `students`(`roll`,`names`,`s_address`,`blood_group`) VALUES ('$roll','$name','$address','$blood_group')";
    mysqli_query($conn, $sql_query);
}