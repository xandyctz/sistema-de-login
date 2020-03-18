<?php
//Conexão
include_once '../login/db_connect.php';
require_once 'index.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

// Botao entrar
if(isset($_POST['btn-entrar'])):

    $erros = array();
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$login = mysqli_escape_string($conexao, $_POST['login']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($nome) or empty($email) or empty($senha) or empty($senha)):
        $erros[] = "<p class='msg-erro'>O campo login/senha precisa ser preenchido</p>";
    else:
        $sql = "select count(*) as total from usuarios where login = '$login'";
		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);


        if($row['total'] == 1):
        $erros[] = "<p class='msg-erro'>Usuario ja existe</p>";
        // $erros[] = "teste erro";

        // $_SESSION['usuario_existe'] = true;
        exit;
        endif;
            

        $sql = "INSERT INTO usuarios (nome, email, login, senha) VALUES ('$nome', '$email', '$login', '$senha')";

        if($conexao->query($sql) == TRUE):
            // $_SESSION['status_cadastro'] = true;
            $erros[] = "teste pegou";
        endif;
            $conexao->close();

        header('Location: /sistema-de-login/login');
    exit;

    endif;
endif;