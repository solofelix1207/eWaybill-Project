<?php 

// $db_connect = mysqli_connect("localhost", "root", "", "webcode");

// if ($db_connect == FALSE) {
//     echo "Not Connected, Try again in a bit";
// } else {
//     // echo "You're connected";
// }


// Attempting to connect to db server

$link = mysqli_connect("localhost", "root", "", "demo");

if ($link == FALSE) {
    die("ERROR: Could not connect." . mysqli_connect_error());
} 

// Attepmting creating database
// $sql = "CREATE DATABASE demo";

// CREATE TABLE

$sql = "CREATE TABLE persons(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
    echo "database created";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);

?>