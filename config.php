<?php
$host = "localhost";
$user = "root";  // seu usuário do phpMyAdmin
$pass = "Guilherme7*";      // senha (em branco se for padrão do XAMPP)
$db   = "turtletrack";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
