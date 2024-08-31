<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST['txtNome']);
        $email = htmlspecialchars($_POST['txtEmail']);
        $mensagem = htmlspecialchars($_POST['txtMensagem']);

        echo "<h1>Obrigado por sua mensagem, $nome!</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";

    } else{
        header("Location: contato.html");
        exit;
    }

?>