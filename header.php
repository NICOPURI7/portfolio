<header class="conteiner">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler p-0 m-0 pt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                    <div clss="navbar-collapse collapse show" id="navbarcollapse" style>
                        <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2"></ul>
                        <div class="d-inline"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                    <li class="nav-item  pb-5">
                            <a class="nav-link px-3 py-1 <?php echo ($pg =="inicio") ? "active" : ""?>"href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item  pb-5">
                            <a class="nav-link px-3 py-1 <?php echo ($pg =="proyectos") ? "active" : ""?>"href="proyectos.php">Proyectos</a>
                        </li>
                       
                        <li class="nav-item px-3 ">
                            <a class="nav-link px-3 py-1  <?php echo ($pg =="sombre_mi") ? "active" : ""?>"href="sobremi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item px-3 ">
                            <a class="nav-link   px-3 py-1 <?php echo ($pg =="contacto") ? "active" : ""?>"href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="file:///C:/Users/Nicolas/Desktop/archivos/Curriculum.pdf" class="btn-rojo mx-3 p-2">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>

                </div>
            </div>
        </nav>
    </header>