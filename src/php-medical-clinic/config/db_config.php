<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical_clinic";
$port = 3380;

function getConnection() {
    global $servername, $username, $password, $dbname, $port;
    $connection = new mysqli($servername, $username, $password, $dbname, $port);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}
?>