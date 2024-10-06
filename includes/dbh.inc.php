<?php
$serverName = "DESKTOP-QAIHKTJ"; // Server name
$database = "HelioGrid";          // Database name

// Connection options
$connectionOptions = array(
    "Database" => $database,
    "Authentication" => SQLSRV_ATTR_TRUST_SERVER_CERT, // Use Windows Authentication
    "CharacterSet" => "UTF-8"     // Optional: Sets character encoding
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection is established
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Connection successful!";
}
