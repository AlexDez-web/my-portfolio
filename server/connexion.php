<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connexion perdue: {$conn->connect_error}");
}
