<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto -- Mensaje Enviado</title>
</head>
<body>
    <center>
    <?php 
$myemail = 'nzunigas86@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>


Mucha suerte con tu primer formulario de contacto!! :D

Siguenos en:
https://twitter.com/TonoWebs
https://www.facebook.com/TonoWebs/
        <form method="POST" action="enviar.php">
            <input type="text" name="nombre" id="" placeholder="name">
            <input type="email" name="email" id="" placeholder="correo">
            <textarea type="text" name="mensaje" id="" placeholder="MENSAJE"></textarea>
            <input type="submit" value="enviar">
        </form>

    </center>
</body>
</html>