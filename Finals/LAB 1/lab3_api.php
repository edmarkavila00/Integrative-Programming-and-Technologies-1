<?php
header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "Edmark Lupiga",
    "email" => "edmark@example.com",
    "status" => "active"
);

echo json_encode($user);
?>
