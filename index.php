<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - Meeta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Cadastrar Usuário</h1>
    </header>
    <main>
        <section id="form">
            <form action="action.php" method="post">
                <label for="name">Seu nome: <span class="required">*</span></label>
                <br>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                <br>
                <label for="phone">Telefone (com DDD):</label>
                <br>
                <input type="tel" id="phone" name="phone" placeholder="(11) 2222-2222">
                <br>
                <label for="email">E-mail: <span class="required">*</span></label>
                <br>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <br><br>
                <button type="submit">Cadastrar</button>
            </form>
            <?php
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </section>
    </main>
</body>
</html>