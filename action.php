<?php
    session_start();
    include_once("connection.php");

    if(isset($_POST["name"]) && isset($_POST["email"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $result_user = "INSERT INTO usuarios(user_name, phone, email, created) VALUES ('$name', '$phone', '$email', NOW())";

        $result_bd = mysqli_query($conn, $result_user);

        if(mysqli_insert_id($conn)) { // Se $conn retornou um ID, então inseriu com sucesso
            $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
            header("Location: index.php"); // Retorna para o index.php
        } else {
            $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar usuário!</p>";
            header("Location: index.php");
        }
    } else {
        echo "Dados incompletos.<br>";
        echo '<a href="./">Voltar</a>';
    }


?>