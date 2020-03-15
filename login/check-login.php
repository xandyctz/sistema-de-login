<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "principal_login";

$conexao = mysqli_connect($hostname, $username, $password, $dbName);

$login = ($_POST['login']);
$senha = ($_POST['senha']);



if (!$conexao):
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
else:

echo "Success: A proper connection to MySQL was made! The $dbName database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conexao) . PHP_EOL;
endif;

mysqli_close($conexao);