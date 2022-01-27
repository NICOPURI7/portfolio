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
                <a href="proyectos.html" class="proyectimg "><img
                        src="images/cohete.svg" alt="cohete"
                        class="cohete"></a>

                <p>Bienvenidos a la pagina web de mis trabajos.</p>
            </div>
        </div>


        <footer class="container my-2 mb-4">
            <div class="row">

                <div class="row mt-5 pb-3">
                    <div class="col-12 col-sm-3 text-center text-sm-start">
                        <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/nicolas-puricelli-321a86202/" target="_blank"
                            title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                        <a href="https://depcsuite.com/?v=d72a48a8ebd2" title="Depc" target="_blank">DePC Suite</a>
                    </div>
                    <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
                        <a href="to:nicolaslinea63@gmail.com">nicolaslinea63@gmail.com</a>
                    </div>
                </div>

        </footer>
        <div class="whatsapp pb-4 pt-3 px-3 ">
            <a href="https://api.whatsapp.com/send?phone=541127680155" title="Whatsapp"><i
                    class="fab fa-whatsapp "></i></a>
        </div>


</body>
      <script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>
</php>