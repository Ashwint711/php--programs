<?php

//First creating new table in an existing database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "empdata";

//Creating connection object
$conn = new mysqli($server, $username, $password, $dbname);

//Checking if connection was established or not
if (!$conn) {
    die("Sorry failed to connect!,error : " . mysqli_error($conn));
}

echo "Database connection successful</br>";

//Creating new Table

//sql query for table creation
$create_table = "CREATE TABLE mytable(sno INT(3) PRIMARY KEY AUTO_INCREMENT, names VARCHAR(30) NOT NULL, city VARCHAR(20) NOT NULL)";

//Executing sql tabel creation query
$result = mysqli_query($conn, $create_table);

if ($result) {
    echo "Table created successfully</br>";
}

//Inserting Rows to the table
//sql query for row Insertion
$insert_rows = "INSERT INTO `mytable`(`sno`,`names`,`city`) VALUES (5,'Khagesh','Jalgaon')";

//Executing Row Insertion query
$result = mysqli_query($conn, $insert_rows);

if ($result) {
    echo "Row inserted successfully</br>";
} else {
    echo "Opps! failed to insert row</br>error : " . mysqli_error($conn);
    echo "</br>";
}

//Fetching records where city='Jalgaon'
$where_clause = "SELECT * FROM `mytable` WHERE `city`='Jalgaon'";
//Executing where clause
$result = mysqli_query($conn, $where_clause); //Table with city='Jalgaon'

//Printing records fetched using Where caluse
$nums = mysqli_num_rows($result);
if ($nums > 0) {
    while ($record = mysqli_fetch_assoc($result)) {
        echo $record['sno'] . ". Hello " . $record['names'] . " your city is " . $record['city'];
        echo "</br>";
    }
}

//Updating records data using UPDATE query
echo var_dump(mysqli_fetch_assoc($result));
$update_query = "UPDATE `mytable` SET `names`='Khagesh Tayade' WHERE `sno`=5";
//Executing update query
$result = mysqli_query($conn, $update_query);
if ($result) {
    echo "Table updated successfully</br>";
} else {
    echo "Failed to update talbe</br>error : " . mysqli_error($conn);
}

echo var_dump($result);

//Printing Number of rows affected by using UPDATE query
$aff_rows = mysqli_affected_rows($conn);
echo "$aff_rows are affected in the table</br>";