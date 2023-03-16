<?php

require_once __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();


$host     =  $_ENV['DB_HOST'];
$database =  $_ENV['DB_DATABASE'];
$user     =  $_ENV['DB_USER'];
$pass     =  $_ENV['DB_PASS'];

$mysqli = new mysqli($host, $user, $pass, $database);
mysqli_set_charset($mysqli, "utf8");


if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
