<?php
//Conexão
require_once 'db_connect.php';
require_once 'index.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

// Botao entrar
if(isset($_POST['btn-entrar'])):

    $erros = array();
    $login = mysqli_escape_string($conexao, $_POST['login']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<p class='msg-erro'>O campo login/senha precisa ser preenchido</p>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($conexao, $sql);


        if(mysqli_num_rows($resultado) > 0):
            // $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = MD5('$senha')";
            $resultado = mysqli_query($conexao, $sql);
            

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($conexao);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: /sistema-de-login');
            else:
                $erros[] = "<p class='msg-erro'>Usuario ou senha invalidos</p>";
            endif;
        else:
            $erros[] = "<p class='msg-erro'>Usuario inexistente </p>";
        endif;

    endif;
endif;