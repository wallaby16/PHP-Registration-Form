<?php

$db_host = "172.32.22.223";
$db_name = "db";
$db_user = "admin";
$db_pass = "toor";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

