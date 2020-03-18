<?php
include('check-login.php');

if(!empty($_SESSION['logado'])):
    header('Location: /sistema-de-login');
endif;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login/index.css">
    <link rel="stylesheet" href="../css/login/form.css">
</head>
<body>
    <div class="container-primary">
    <header class="fbox">
        <div>
        <a class="mousechanged" href="/sistema-de-login"><h1 class="title-logo">Principal</h1></a>
        
        </div>
        <nav class="nav respon movel-space">
            <a class="menu-primary" href="/sistema-de-login">Inico</a>
            <a class="menu-primary" href="#">Sobre</a>
            <a class="menu-primary" href="#">Contato</a>
        </nav>
        <nav class="nav respon">
        <!-- <a class="name-login-register" title="Registrar" href="../logout.php">Sair</a> -->

            <?php
            if(!empty($_SESSION['logado'])):
                echo '<a class="name-login-register" title="Registrar" href="logout.php">Sair</a>';
            endif;
            if(empty($_SESSION['logado'])):
                echo '<a class="name-login-register" title="Logar" href="../login/" >Login</a>';
                echo '<a class="name-login-register" title="Registrar" href="../register/">Register</a>';
            endif;

            ?>
        </nav>

    </header>

    <main class="fbox-main">
        <form action="check-login.php" method="POST" class="largura">
            <h1 class="title-form">Painel de Login</h1>
            <input type="text" name="login" placeholder="Username" autocomplete="off" maxlength="15">
            <input type="password" name="senha" placeholder="Password" maxlength="20">
            <?php
               if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
            ?>
            <button type="submit" name="btn-entrar" class="btn-form">Entrar</button>
        </form>
    </main>

    <footer class="fbox-footer">
        FOOTER   
    </footer>
</div>
</body>
</html>