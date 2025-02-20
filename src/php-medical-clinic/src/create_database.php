<?php
// filepath: /c:/Users/Lenovo/Downloads/Maniclang-MedicalClinic/src/php-medical-clinic/config/db_config.php
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'medical_clinic';

function getConnection() {
    global $host, $username, $password, $db_name;
    $connection = new mysqli($host, $username, $password, $db_name);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}

function createDatabaseAndTable() {
    // Create connection
    $conn = getConnection();

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS clinical_data (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        age INT NOT NULL,
        heart_rate INT NOT NULL,
        blood_pressure INT NOT NULL,
        diagnosis VARCHAR(255) NOT NULL,
        prescription VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }

    // Close connection
    $conn->close();
}

// Call the function to create the table
createDatabaseAndTable();
?>