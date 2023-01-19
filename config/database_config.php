<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'password');
define('DATABASE', 'technos_db');

$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($connection->error) {
    die($connection->connect_error);
}
