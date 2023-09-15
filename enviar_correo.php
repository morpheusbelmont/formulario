<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "atila@utp.edu.co"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo Electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $cabeceras = "From: $email";

    mail($destinatario, $asunto, $contenido, $cabeceras);

    echo "¡Mensaje enviado con éxito!";
} else {
    echo "Error: Acceso no autorizado.";
}
?>
