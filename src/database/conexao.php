<?php

$host = "db";
$database = "csv";
$user = "root";
$pass = "root";

//A Mil
//$host ="db01.ksys.net.br";
//$database = "bemtevi_a_mil";
//$user = "a_mil";
//$pass = "!7E1Yad6lfbf";

$mysqli = new mysqli($host, $user, $pass, $database);
mysqli_set_charset($mysqli, "utf8");


if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
