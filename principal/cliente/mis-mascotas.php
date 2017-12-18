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

    </header>
        <div class="container pets-scroll text-md-center text-xs-center">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-md-offset-3 img-responsive" style="margin-top:20px;">
                        <img src="../../images/rd-catdog-client.png" class="img-responsive" alt="mascota-profile">
                        
                        
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="container pets-scroll-content col-md-3">
                    
                </div>
                <div class="container pets-scroll-content col-md-6" >     
                    <div class="dropdown show">
                        <a class="btn btn-info dropdown-toggle btn-lg" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selecciona mascota
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Perro cachupin</a>
                            <a class="dropdown-item" href="#">Perro rayo</a>
                            <a class="dropdown-item" href="#">Gato ton</a>
                        </div>
                        </div>
                </div>
                <div class="container pets-scroll-content col-md-3 text-md-left">
                    <!--<button id="buscar-mascota"class="btn btn-success">Mostrar datos</button>-->
                </div>

            </div>
            <div class="row text-md-center text-xs-center" style="margin-top:30px;">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 text-sm-left">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="color: green; font-weight: bold;">Ficha de mascota</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outNombre">Nombre</label>
                                        <input type="text" id="outNombre" class="form-control" placeholder="Cachupin" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="outEspecie">Especie</label>
                                        <input type="text" id="outEspecie" class="form-control" placeholder="Canis Lupus" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outRaza">Raza</label>
                                        <input type="text" id="outRaza" class="form-control" placeholder="Pastor Alemán" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outSexo">Sexo</label>
                                        <input type="text" id="outSexo" class="form-control" placeholder="Macho" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outDescripcion">Descripción</label>
                                        <textarea class="form-control" id="outDescripcion" rows="2" placeholder="Pelaje fino color marrón y grisaceo"disabled="disabled"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="outNacimiento">Nacimiento</label>
                                        <input type="text" id="outNacimiento" class="form-control" placeholder="06-diciembre-2016" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outVacunas">Vacunaciones</label>
                                        <input type="text" id="outVacunas" class="form-control" placeholder="Al día" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="outEsteril">Estéril</label>
                                        <input type="text" id="outEsteril" class="form-control" placeholder="Si" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outDescripcion">Afecciones</label>
                                        <textarea class="form-control" id="outAfecciones" rows="3" placeholder="Problemas sanguíneos" disabled="disabled"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-sm-10 text-sm-left text-md-left">
                                        <a href="#" class="btn btn-warning">Imprimir</a>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-sm-10 text-sm-left text-md-left">
                                        <a href="vacunas-mascota.php" class="btn btn-success">Ver vacunas</a>
                                    </div>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                </div>
                </div>
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