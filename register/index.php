<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="container-primary">
    <header class="fbox">
        <div>
        <a class="mousechanged" href="/painellogin"><h1 class="title-logo">Principal</h1></a>
            
        </div>
        <nav class="nav respon movel-space">
            <a class="menu-primary" href="#">Inico</a>
            <a class="menu-primary" href="#">Sobre</a>
            <a class="menu-primary" href="#">Contato</a>
        </nav>
        <nav class="nav respon">
            <?php
            if(!empty($_SESSION)):
                echo '<a class="name-login-register" title="Registrar" href="logout.php">Sair</a>';
            else:
                echo "";
            endif;
            if(empty($_SESSION)):
                echo '<a class="name-login-register" title="Logar" href="../login/" >Login</a>';
                echo '<a class="name-login-register" title="Registrar" href="../register/">Register</a>';
            endif;

            ?>
        </nav>

    </header>

    <main class="fbox-main">
        REGISTER
    </main>

    <footer class="fbox-footer">
        FOOTER   
    </footer>
</div>
</body>
</html>