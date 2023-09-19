<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "<EMAIL>";


  // Correo de destino
  $to = "novokolor@hotmail.com";

  // Asunto del correo
  $subject = "Nuevo mensaje de contacto";

  // Cuerpo del correo
  $body = "Nombre: $name\n";
  $body .= "Email: $email\n";
  $body .= "Mensaje:\n$message";

  // Encabezados del correo
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envío del correo
  mail($to, $subject, $body, $headers);

  // Redireccionar o mostrar un mensaje de éxito

    header("Location: confirmacion.html");
    exit();
  }
?>
