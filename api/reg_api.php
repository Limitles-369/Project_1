<?php
header("Content-Type: application/json");

// Include database connection
require_once("../db/db.php");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method not allowed
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

// Get the JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Validate the input
if (
    empty($data['Name']) ||
    empty($data['Email']) ||
    empty($data['password'])
) {
    http_response_code(400); // Bad request
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

// Sanitize input
$name = mysqli_real_escape_string($connect, $data['name']);
$email = mysqli_real_escape_string($connect, $data['email']);
$password = mysqli_real_escape_string($connect, $data['password']);

// Check if email already exists
$sql = "SELECT * FROM students WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    http_response_code(409); // Conflict
    echo json_encode(["status" => "error", "message" => "Email already exists"]);
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the user into the database
$sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
if (mysqli_query($connect, $sql)) {
    http_response_code(201); // Created
    echo json_encode(["status" => "success", "message" => "User registered successfully"]);
} else {
    http_response_code(500); // Internal server error
    echo json_encode(["status" => "error", "message" => "Failed to register user"]);
}
?>
