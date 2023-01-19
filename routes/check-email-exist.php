<?php

include '../config/database_config.php';

$raw_post_data = file_get_contents('php://input', false);

if (!empty($raw_post_data)) {

    $emailDecoded = json_decode($raw_post_data);

    $emailArrayDecoded = (array) $emailDecoded;

    $emailToCheck = $emailArrayDecoded['email'];

    $sql = "SELECT * FROM tbl_user WHERE username = '$emailToCheck'";

    $result = $connection->query($sql);

    if ($result->num_rows <= 0)
        echo json_encode(["MESSAGE" => "SUCCESS", "EMAIL" => $emailArrayDecoded['email']]);
    else
        echo json_encode(["MESSAGE" => "FAILED", "EMAIL" => $emailArrayDecoded['email']]);
}
