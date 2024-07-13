<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Include necessary files
include_once '../../config/database.php';
include_once '../../models/Users.php';

// Initialize Database and User object
$database = new Database();
$db = $database->getConnection();
$user = new Users($db);

// Process logout
if ($user->prosesLogout()) {
    // Logout successful
    http_response_code(200);
    echo json_encode("You have successfully logged out.");

    // Redirect to homepage
    header("Location: https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/");
    exit();
} else {
    // Logout failed
    http_response_code(500);
    echo json_encode("Unable to logout. Please try again later.");
}
