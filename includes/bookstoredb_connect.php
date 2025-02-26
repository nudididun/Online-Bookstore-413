<?php

$host = "localhost"; //host name
$db_name = "bookstore_db"; //database name
$username = "root"; //default
$password = ""; //default

$conn = new mysqli($host, $username, $password, $db_name); //store connection in conn

//ensuring conenction
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>