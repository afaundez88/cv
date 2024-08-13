<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo a la que se enviarán los mensajes
    $to = "yonatan.faundez@gmail.com";
    $subject = "Nuevo mensaje de contacto";

    // Cuerpo del correo
    $body = "Nombre: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensaje:\n$message";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado. Gracias por contactarnos.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Inténtalo de nuevo.";
    }
}
?>
