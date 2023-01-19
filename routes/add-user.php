<?php
include '../config/database_config.php';

$raw_post_data = file_get_contents('php://input', false);

if (!empty($raw_post_data)) {

    $jsonData = json_decode($raw_post_data);
    $convertedJsonData = (array) $jsonData;

    $userName = $convertedJsonData['userName'];
    $password = $convertedJsonData['password'];
    $fullName = $convertedJsonData['fullName'];

    // echo $userName . ' ' . $password . ' ' . $fullName;

    $sql = "INSERT INTO tbl_user (username, password, full_name)
    VALUES('$userName', '$password', '$fullName')";

    if ($connection->query($sql)) {
        echo json_encode(["MESSAGE" => "Success!"]);
    } else {
        echo json_encode(["MESSAGE" => "Error"]);
    }
}
