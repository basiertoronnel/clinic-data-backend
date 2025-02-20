<?php
require_once '../config/db_config.php';

$conn = getConnection();
if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}
$conn->close();
?>