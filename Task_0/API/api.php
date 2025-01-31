<?php
// Enable CORS (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Define the response data
$response = [
    "email" => "simeonedet89@gmail.com",
    "current_datetime" => gmdate('Y-m-d\TH:i:s\Z'), 
    "github_url" => "https://github.com/simiCodey/hng12-php" 
];

// Return the JSON response
echo json_encode($response, JSON_PRETTY_PRINT);
?>
