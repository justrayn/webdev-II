<?php
require_once 'Database.php';

$database = new Database();
$conn = $database->connect();

if ($conn) {
    echo "Connected to the database successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>
