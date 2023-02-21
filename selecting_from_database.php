<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "credentials";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn == NULL) {
    die("sorry failed to connect</br>error : " . mysqli_error($conn));
} else {
    echo "Connected successfully</br>";
}
//Selecting Table from database
$sql = "SELECT * FROM `credentials`";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Slected table successfully</br>";
} else {
    echo "Failed to select table</br>";
}

//Printing number of rows/records in the table 

echo "Number of rows are : " . mysqli_num_rows($result);
echo "</br>";

//Fetching one record from the table

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['srno'] . ". Your email is `" . $row['emails'] . "` and your password is `" . $row['passwords'] . "`";
    echo "</br>";
}