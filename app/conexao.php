<?php

$host = "db";
$database = "csv";
$user = "root";
$pass = "root";

$mysqli = new mysqli($host, $user, $pass, $database);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


