<?php

// Conexão ao banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "principal_login";

$conexao = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;