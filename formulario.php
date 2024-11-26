<?php
    // PHP para manejar el formulario
    $mensaje = ""; // Mensaje para mostrar al usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitizar entradas del formulario
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);

        // Configuración del correo
        $to = "correodepruebas@gmail.com";
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nCelular: $phone\nCorreo Electrónico: $email";
        $headers = "From: $email";

        // Enviar el correo y mostrar mensaje
        if (mail($to, $subject, $body, $headers)) {
            $mensaje = "¡Mensaje enviado con éxito!";
        } else {
            $mensaje = "Hubo un problema al enviar el mensaje. Inténtalo nuevamente.";
        }
    }
    ?>
