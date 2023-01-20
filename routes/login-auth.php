<?php

include '../config/database_config.php';

session_start();

$raw_post_data = file_get_contents('php://input', false);

$jsonData = json_decode($raw_post_data);

$convertedJson = (array) $jsonData;

$userName = $convertedJson['userName'];
$password = $convertedJson['password'];

$sql = "SELECT * FROM tbl_user WHERE username = '$userName' AND password = '$password'";

$result = $connection->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows <= 0) {
    echo json_encode(["MESSAGE" => "FAILED"]);
} else {
    $_SESSION['username'] = $row['full_name'];
    echo json_encode(["MESSAGE" => "SUCCESS"]);
}
