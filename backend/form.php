<?php
$to = "wwwapas_sm@mail.com";
$subject = "Mail desde el formulario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . 
"\r\n";
$nombre = $_POST['nombreInput'];
$email = $_POST['emailinput'];
$comentarios = $_POST['mensajeInput'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre: $nombre </p> 
<p>Email: $email </p> 
<p>Comentarios: $comentarios </p> 
</body>
</html>";
 echo 'Gracias por comunicarse con nosotros';
mail($to, $subject, $message, $headers);
?>