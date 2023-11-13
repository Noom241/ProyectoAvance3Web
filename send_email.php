<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $message = $_POST["Message"];

    // Configurar el destinatario del correo electrónico
    $to = "noom.dest@gmail..com";
    $subject = "Nuevo mensaje del formulario de contacto";

    // Crear el cuerpo del mensaje
    $email_body = "Nombre: $name\n";
    $email_body .= "Correo electrónico: $email\n";
    $email_body .= "Teléfono: $phone\n";
    $email_body .= "Mensaje:\n$message";

    // Enviar el correo electrónico
    mail($to, $subject, $email_body);

    // Enviar una respuesta JSON al cliente
    echo json_encode(["message" => "¡Gracias! Tu mensaje ha sido enviado."]);
} else {
    // Si la solicitud no es POST, enviar un mensaje de error
    echo json_encode(["message" => "Error: Método de solicitud no válido."]);
}
?>
