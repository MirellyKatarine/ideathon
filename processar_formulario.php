<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "pablo.lucas@officecontpe.com.br"; // Coloque o endereço de email para receber as mensagens
    $subject = "Nova mensagem do formulário de contato";
    $headers = "From: $email";

    // Monta o corpo do email
    $email_body = "Nome: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Mensagem:\n$message";

    // Envia o email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.";
    }
}
?>