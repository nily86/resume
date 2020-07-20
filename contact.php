<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="aside.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="formcss.css">
    <title>Mensaje Enviado</title>
</head>
<body>
    <div class="divcontent">
<header >
    <div class="portafolio">PROTOFILO.</div>
    
   <div class="menu">
     <a class="home" href="index.html">Home </a>
     <a class="works" href="works.html">Works</a>
     <a class="contact" href="contact.html">Contact</a>
    
 </header>
<div class=""> 
<div class="">
<div class=""></div>


</div>

<div class=""> </div>
</div>
         
    <div class="content">
        <main class="main">
            <div style="position: relative; left: 0; top: 0;">
                <img src="images/skychefs.jpg" class="eye" id="eye"/>
                <img src="images/black.png" class="heaven"/>
            </div>
        </main>
        <aside class="aside">
     
        <h1 class="hellow">Contact</h1>
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
        <form method="POST" action="enviar.php" class="form">
            <input type="text" name="nombre" id="" placeholder="Name">
            <input type="email" name="email" id="" placeholder="email">
            <input type="tel" name="" id="" placeholder="Phone">
            <input type="text"name="mensaje" value="" id="textarea" placeholder="Type your text here...">
            <input type="submit" value="Submit" >

        </form>
        
           

 </aside>
    </div>
    
    <footer class="footer">
        <div class="contacto">
    <div class="phone"><i class="fas fa-phone-alt"></i>cell:(786)4456-777</div>
   
    <div class="correo"><i class="fas fa-envelope"></i> <a href="mailto:nzunigas86@gmail.com">nzunigas86@gmail.com</a></div>
</div>
    </footer>
    <link rel="stylesheet" href="javascrip.js">
</div>
</body>
</html>