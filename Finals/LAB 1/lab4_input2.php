<?php
header("Content-Type: text/plain");

$raw_input = file_get_contents("php://input");
$data = json_decode($raw_input, true);

$username = $data["username"] ?? '';
$password = $data["password"] ?? '';

echo "Username: $username\n";
echo "Password: $password\n";
?>
