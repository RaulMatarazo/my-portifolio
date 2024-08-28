<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'txtMensagem', FILTER_SANITIZE_STRING);

    // Validações básicas
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um endereço de email válido.";
        exit;
    }

    // Configurações do email
    $to = "raul.ulrich.matarazo@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Nova mensagem de contato de $nome";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
}
?>
