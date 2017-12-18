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
    <link rel="icon" type="image/png" href="../../images/rd_fav_madpets.png"/>

    <title>Principal MADPets</title>
    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/gen-style.css">
    <?php
     if(isset($_SESSION['tipo'])){
        
     }
    ?>
    <!-- Font Js -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Icons Js -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
    <!--PHP INCLUDES-->
    <?php
    Include ("funciones.php");
    ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Logo -->
                    <a href="cliente.php"><img src="../../images/madpets1stlogo.png" alt="madpets" width="100" height="100" /></a>
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
                <a class="navbar-brand" href="cliente.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="mis-mascotas.php">Mis mascotas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mis consultas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Horas Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <!--<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex"> -->
                            <li class="nav-item dropdown">
                                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="nav-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <?php
                                    echo $_SESSION['usuario'];
                                    ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item " href="perfil.php">Mi perfil</a>
                                    <a class="dropdown-item " href="schedule.php">Mi agenda</a>
                                    <a class="dropdown-item " href="documentos.php">Mis documentos</a>
                                    <a class="dropdown-item " href="ayuda.php">Ayuda</a>
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

        <!--
        
        -->
        <div class="col-ms-2">
        </div>
        <div class="container principal-con col-ms-8">
            <div class="jumbotron">
                <h1 class="display-3">Reservas online!</h1>
                <p class="lead">Ya puedes reservar tu consulta on-line en MAD Pets! No dejes para después la salud de tu mascota.</p>
                    <hr class="my-4">
                    <p>Reserva hasta con 24 horas de antelación tu hora online. Y recibe un descuento del 25% en el precio de la reserva.</p>
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Más información</a>
                </p>
            </div>
        </div>
        <div class="col-ms-2">
        </div>
        
    </header>
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