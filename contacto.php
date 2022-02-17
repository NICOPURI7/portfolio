<?php 
$pg="contacto";

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    // Varios destinatarios
    $para = "nelson.tarche@gmail.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: NICOLASLINEA63@GMAIL.COM' . "\r\n";
    $cabeceras .= 'From: contacto@NICOPURI.com.ar' . "\r\n";

    // Enviarlo
    mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion_mensaje.php");
}
?>

<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Font Awesome/css/fontawesome.min.css/">
    <link rel="stylesheet" href="css/Font Awesome/css/all.min.css">
    <link rel="stylesheet" href="css/Estilos.css">
    <title>Contacto</title>

</head>


<body id="contacto">
<?php include_once "header.php";?>
    <main class="conteiner">
        <div class="row">
            <h1>Contacto</h1>
            <div class="col-12 pt-4 pb-5 ps-5">
                <div class="row">
                    <div class="col-sm-6 col-12 ">
                        <p>Te invito a que te contactes enviándome un mensaje o bien por Whatsapp.</a>
                        </p>

                        <img src="images/WhatsApp Image 2021-12-29 at 5.31.47 PM.jpeg" class="QR p-5" style="border-radius: 25%;">
                    </div>
                    <div class="col-sm 6 col-12 ">
                        <form action="" method="POST">
                            <div class="pb-3">
                                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control shadow ">
                            </div>
                            <div class="pb-3">
                                <input type="email" name="txtCorreo" placeholder="Correo" class="form-control shadow">
                            </div>
                            <div class="pb-3">
                                <input type="tel" name="txtTelefono" placeholder="whatsapp" class="form-control shadow">
                            </div>
                            <div class="pb-3">
                                <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                                    class="form-control shadow"></textarea>
                            </div>
                            <button type="submit" id="btnEnviar" name="btnEnviar"
                                class="btn shadow px-3">Enviar.</button>

                        </form>

                    </div>

                </div>



            </div>
        </div>
    </main>
    <footer class="container my-2 mb-4">
        <div class="row">

            <div class="row mt-5 pb-3">
                <div class="col-12 col-sm-3 text-center text-sm-start">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/nicolas-puricelli-321a86202/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                    <a href="https://depcsuite.com/?v=d72a48a8ebd2" title="Depc" target="_blank">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
                    <a href="to:nicolaslinea63@gmail.com">nicolaslinea63@gmail.com</a>
                </div>
            </div>

    </footer>

<div class="whatsapp pb-4 pt-3 px-3">
        <a href="https://api.whatsapp.com/send?phone=541127680155" title="Whatsapp"><i class="fab fa-whatsapp "></i></a>
    </div>



</body>

<script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>
</php>