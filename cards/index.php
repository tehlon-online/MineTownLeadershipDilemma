<?php
// Set headers to return JSON
header('Content-Type: application/json');

// Get all JSON files in the current directory
$files = glob('*.json');

// Return the list as JSON
echo json_encode($files);
?>