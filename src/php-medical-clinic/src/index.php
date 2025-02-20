<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

require_once '../config/db_config.php';

function insertPatientData($name, $age, $heartRate, $bloodPressure, $diagnosis, $prescription) {
    $conn = getConnection();

    $stmt = $conn->prepare("INSERT INTO clinical_data (name, age, heart_rate, blood_pressure, diagnosis, prescription) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisss", $name, $age, $heartRate, $bloodPressure, $diagnosis, $prescription);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $heartRate = $_POST['heart_rate'];
    $bloodPressure = $_POST['blood_pressure'];
    $diagnosis = $_POST['diagnosis'];
    $prescription = $_POST['prescription'];

    insertPatientData($name, $age, $heartRate, $bloodPressure, $diagnosis, $prescription);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Clinical Data Entry</title>
</head>
<body>
    <div class="container">
        <h1>Clinical Data Entry</h1>
        <form method="POST" class="space-y-5">
            <div>
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Age</label>
                <input type="number" name="age" required>
            </div>
            <div>
                <label>Heart Rate</label>
                <input type="number" name="heart_rate" required>
            </div>
            <div>
                <label>Blood Pressure</label>
                <input type="number" name="blood_pressure" required>
            </div>
            <div>
                <label>Diagnosis</label>
                <input type="text" name="diagnosis" required>
            </div>
            <div>
                <label>Prescription</label>
                <input type="text" name="prescription" required>
            </div>
            <button type="submit">Save Report</button>
        </form>
    </div>
</body>
</html>