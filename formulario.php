<?php
    $successMessage = "";
    $errorMessage = "";

    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $to = "correodepruebas@gmail.com"; // Cambia por tu correo real
                $subject = "Nuevo mensaje de contacto";
                $body = "Nombre: $name\nCorreo: $email\nMensaje: $message";
                $headers = "From: $email";

                if (mail($to, $subject, $body, $headers)) {
                    $successMessage = "¡Mensaje enviado con éxito!";
                } else {
                    $errorMessage = "Error al enviar el mensaje. Inténtalo más tarde.";
                }
            } else {
                $errorMessage = "Por favor, ingresa un correo válido.";
            }
        } else {
            $errorMessage = "Por favor, completa todos los campos.";
        }
    }
    ?>
    <!-- Mostrar mensajes -->
    <?php if ($successMessage): ?>
        <div class="message success"><?php echo $successMessage; ?></div>
    <?php elseif ($errorMessage): ?>
        <div class="message error"><?php echo $errorMessage; ?></div>
    <?php endif; ?>
