<?php 
$pg="proyectos";


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
    <title>Proyectos</title>

</head>


<body id="proyectos">
<?php include_once "header.php";?>
    <main class="conteiner">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm 6">
                <p>Los siguientes son algunos de mis trabajos:</p>
            </div>
            <div class="row">
                <div class=" col 12 col-sm-4">
                    <div class="m-1 border bgwhite">
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-thumbnail">
                        <div class="border py-2 ps-2 pt-3 bg-danger">
                            <h4> ABM CLIENTES</h4>
                        </div>
                        <div class="py-3 px-3 proyecto">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap
                                y Json.</p>
                        </div>
                        <div class="btn py-2 pb-4">
                            <div class="d-inline">

                                <a href="" class="btn-rojo mx-2 p-2">Ver codigo de fuente </a>

                            </div>
                            <div class="d-inline">

                                <a href="" class="btn-blanco mx-2 p-2">Ver online </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col 12 col-sm-4  proyecto ">
                    <div class="m-1  border bgwhite">
                        <img src="images/abmventas.png" alt="ABM Ventas" class="img-thumbnail">
                        <div class="border py-2 ps-2 pt-3 bg-danger">
                            <h4> ABM GESTIÓN DE VENTAS</h4>
                        </div>
                        <div class="py-3 px-3 proyecto">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap,Js, Jquery y MySQL de base de datos.</p>
                        </div>
                        <div class="btn py-2  pb-4">
                            <div class="d-inline">
                                <a href="" class="btn-rojo mx-2 p-2">Ver codigo de fuente </a>
                            </div>
                            <div class="d-inline">
                                <a href="" class="btn-blanco mx-2 p-2">Ver online </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col 12 col-sm-4  proyecto">
                    <div class="m-1 border bgwhite">
                        <img src="images/proyecto-integrador.png" alt="ABM Integrador" class="img-thumbnail">
                        <div class="border py-2 ps-2 pt-3 bg-danger ">
                            <h4> PROYECTO INTEGRADOR</h4>
                        </div>
                        <div class="py-3 px-3 proyecto">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, Jquery, AJAX, HTML,
                                CSS,
                                Mercado Pago con panel administrador, gestor de usuarios, modulo de permisos y
                                funciones
                                afines.</p>
                        </div>
                        <div class="btn py-2  pb-4">
                            <div class="d-inline">
                                <a href="" class="btn-rojo mx-2 p-2">Ver codigo de fuente </a>
                            </div>
                            <div class="d-inline">
                                <a href="" class="btn-blanco mx-2 p-2">Ver online </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        </div>
        </div>
    </main>
    <footer class="container my-2 mb-4">
        <div class="row">

            <div class="row mt-5 pb-3 ">
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

    <div class="whatsapp pb-4 pt-3 px-3">
        <a href="https://api.whatsapp.com/send?phone=541127680155" title="Whatsapp"><i class="fab fa-whatsapp "></i></a>
    </div>



</body>
<script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>

</php>