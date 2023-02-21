<?php

$conn = new mysqli("localhost", "root", "", "empdata");
if (!$conn) {
    die("Sorry failed to connect.Error : " . mysqli_error($conn));
}
echo "Connected successfully</br>";

//Selecting table 'mytable' from empdata database
$sql = "SELECT * FROM `mytable`";
$result = mysqli_query($conn, $sql);
if ($result != null) {
    echo "Table selected successfully</br>";
}

//Printing all the records of selected table
$nums = mysqli_num_rows($result);
if ($nums > 0) {
    while ($record = mysqli_fetch_assoc($result)) {
        echo $record['sno'] . ". Hello " . $record['names'] . " your city is " . $record['city'] . "</br>";
    }
}

// Deleting records from the table
$delete_query = "DELETE FROM `mytable` WHERE `city`='Bhusawal' LIMIT 8";
$result = mysqli_query($conn, $delete_query);
$aff_rows = mysqli_affected_rows($conn);
echo "$aff_rows rows deleted";