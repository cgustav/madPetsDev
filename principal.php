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
    <title>Principal MADPets</title>
    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/gen-style.css">
    <!-- Font Js -->
    <!--<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">-->
    <!-- Icons Js -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Logo -->
                    <img src="images/madpets1stlogo.png" alt="madpets" width="100" height="100" />
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
                <a class="navbar-brand" href="principal.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Mis mascotas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Horas Online</a>
                        </li>
                        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="nav-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <?php
                                    echo $_SESSION['usuario'];
                                    ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item " href="#">Mi perfil</a>
                                    <a class="dropdown-item " href="#">Mis Documentos</a>
                                    <a class="dropdown-item " href="#">Agenda</a>
                                    <a class="dropdown-item " href="cerrarsesion.php">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

        </div>

    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
<?php 
}else{
	header("Location:error.hmtl");
	} 
?>