<?php

//require_once __DIR__ . '../../../vendor/autoload.php';
//
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
//$dotenv->load();


$host     =  "db01.ksys.net.br";                //$_ENV['DB_HOST'];
$database =  "bemtevi_brdrive";                //$_ENV['DB_DATABASE'];
$user     =  "brdrive";                 //$_ENV['DB_USER'];
$pass     =  "OLFVHRWI";              //$_ENV['DB_PASS'];

$mysqli = new mysqli($host, $user, $pass, $database);
mysqli_set_charset($mysqli, "utf8");


if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
