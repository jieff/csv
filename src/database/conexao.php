<?php

//$host = "db";
//$database = "csv";
//$user = "root";
//$pass = "root";

$host = "db01.ksys.net.br";
$database = "bemtevi_brdrive";
$user = "brdrive";
$pass = "OLFVHRWI";

$mysqli = new mysqli($host, $user, $pass, $database);
mysqli_set_charset($mysqli, "utf8");


if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
