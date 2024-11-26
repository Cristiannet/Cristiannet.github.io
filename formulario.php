<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    $to = "correodepruebas@gmail.com";
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $name\nCelular: $phone\nCorreo Electrónico: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
    // Redirección al index.html si el correo se envía con éxito
    header("Location: index.html");
    exit(); // Detener la ejecución del script después de redirigir
} else {
    echo "Hubo un problema al enviar el mensaje.";
}

?>
