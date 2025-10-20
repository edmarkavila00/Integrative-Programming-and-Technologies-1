<?php
header("Content-Type: text/plain");

// Simulated JSON input (as if it came from Postman)
$raw_input = '{"username": "admin", "password": "1234"}';

// Decode JSON into PHP associative array
$data = json_decode($raw_input, true);

// Access and display individual values
$username = $data["username"] ?? '';
$password = $data["password"] ?? '';

echo "Username: $username\n";
echo "Password: $password\n";
?>
