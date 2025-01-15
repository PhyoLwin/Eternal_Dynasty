<?php
// Function to open a connection
function openDatabaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database_name";

    // Create a new connection using MySQLi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn; // Return the connection object
    
}

// Function to close the connection
function closeDatabaseConnection($conn) {
    // Close the database connection
    $conn->close();
}
?>
