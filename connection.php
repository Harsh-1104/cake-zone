<?php

$server = "localhost";
$host = "127.0.0.1";
$username = "root";
$password = "";
$DBname = "ecommerce";

$conn = new mysqli($host, $username, $password, $DBname);

if (!$conn) {
    echo 'Connection Not Established...';
}
