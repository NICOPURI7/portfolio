<?php 
$pg="inicio";


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
    <title>Inicio</title>
</head>

<body id="inicio">

   <?php include_once "header.php";?>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pt-5 mb-5 div-cohete ">
                <a href="proyectos.php" class="proyectimg "><img
                        src="images/cohete.svg" alt="cohete"
                        class="cohete"></a>

                <p>Bienvenidos a la pagina web de mis trabajos.</p>
            </div>
        </div>


        <?php include_once "footer.php";?>
        <div class="whatsapp pb-4 pt-3 px-3 ">
            <a href="https://api.whatsapp.com/send?phone=541127680155" title="Whatsapp"><i
                    class="fab fa-whatsapp "></i></a>
        </div>


</body>
      <script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>
</php>