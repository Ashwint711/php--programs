<?php

//Inserting new records to the existing database

$conn = new mysqli("localhost","root","","empdata");

$insert_rows = "INSERT INTO `mytable`(`sno`,`names`,`city`) VALUES (null,'Rahul','Bhusawal')";
$result = mysqli_query($conn,$insert_rows);
if($result){
   echo "Records inserted successfully</br>";
}