<?php
session_start();
if(isset($_SESSION['usuario'])){ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ambiente Veterinario</title>
    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/vet-style.css">
    <?php
     if(isset($_SESSION['tipo']) ){
     }
     ?>
    <!-- Font Js -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Icons Js -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Logo -->
                    <a href="vet.php"><img src="../../images/madpets1stlogo.png" alt="madpets" width="100" height="100" /> </a>
                </div>
                <div class="col-md-6">
                    <!-- Iconos redes sociales -->
                    <ul class="social-header list-inline text-xs-right">
                        <!--clase main,bst class, bst class-->
                        <li class="list-inline-item">
                            <!-- 1s item-->
                            <!--bst class-->
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <!-- 1s item-->
                            <!--bst class-->
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <!-- 1s item-->
                            <!--bst class-->
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <!-- 1s item-->
                            <!--bst class-->
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="menu-bar text-xs-center">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="vet.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="mi-consulta.php"> Mi Consulta
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="nav-dropdown-cl" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Clientes</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item " href="crea-cliente.php">Crear cliente</a>
                                <a class="dropdown-item " href="busca-cliente.php">Buscar cliente</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="nav-dropdown-masc" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Mascotas</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item " href="ingresa-mascota.php">Ingresar mascota</a>
                                <a class="dropdown-item " href="busca-mascota.php">Buscar mascota</a>
                            </div>
                        </li>
                        
                        <!--<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex"> -->
                            <li class="nav-item dropdown">
                                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="nav-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Vet. 
                                    <?php
                                    echo $_SESSION['usuario'];
                                    ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item " href="perfil.php">Mi perfil</a>
                                    <a class="dropdown-item " href="mi-horario.php">Mi horario</a>
                                    <a class="dropdown-item " href="../../cerrarsesion.php">Salir</a>
                                </div>
                            </li>
                        <!--</ul>-->
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

        </div>

    </header>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card mb-3">
                <img class="card-img-top" src="../../images/sc-vet-rectangle.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Ambiente veterinario MADPets ya disponible!</h4>
                    <p class="card-text">Ya está disponible la nueva versión del ambiente veterinario On-line MADPets! Consulta aquí alguna de las funciones que tenemos disponibles para ti.</p>
                    <a href="noticias/novedades-vetonline.php" class="btn btn-info">Ver más</a>
    </br>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>              
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>        
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
<?php   
}else{
	header("Location:../../error.html");
	} 
?>