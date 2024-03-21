<?php
// Database connection details
$servername = "sql104.infinityfree.com";
$username = "if0_36211399";
$password = "qCmPjBZj4pi09Ji";
$dbname = "if0_36211399_users";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    echo "First Name: $firstName, Last Name: $lastName"; // Add this line for debugging


    // Insert data into the database
    $sql = "INSERT INTO users (first_name, last_name) VALUES ('$firstName', '$lastName')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
