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


    


     <!--CONTENIDO-->
     <div class="row"> 
        <div class="container profile-img col-md-12 text-md-center" style="margin-top:40px; margin-bottom:30px;">
            <img src="../../images/doctor-male-icon.png" alt="user-rounded" width="200" height="200">
            </div>
        </div>
    
       <div class="container profile-form">
           <div class="row">
                <div class="col-md-4 text-md-center">
                </div>
                <div class="col-md-6 text-md-left">
                <!--DIRECCIONAR A modifica-cliente.php-->
                    <form method="post" action="mis-mascotas.php">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-5 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Pedrito" 
                            value="<?php
                                    echo $_SESSION['usuario'];
                                    ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputApeP" class="col-sm-5 col-form-label">Apellido Paterno</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputApeP" placeholder="Engel" 
                                value="<?php
                                    echo $_SESSION['apellidop'];
                                    ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputApeM" class="col-sm-5 col-form-label">Apellido Materno</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputApeM" placeholder="Tapia"
                                value="<?php
                                    echo $_SESSION['apellidom'];
                                    ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-5 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="nombre@ejemplo.com" 
                            value="<?php
                                    echo $_SESSION['email'];
                                    ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                 <a href="chng-password1.php" class="btn btn-success" role="button">Cambiar contraseña</a>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputRut" class="col-sm-5 col-form-label">Rut</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputRut" disabled="disabled"
                            value="<?php
                                    echo $_SESSION['rutUsuario'];
                                    ?>">
                            </div>
                            
                            <div class="col-sm-10">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                *El RUT sólo puede ser asignado o modificado por personal de MADPets y este te valida como cliente dentro del sistema 
                            </small>
                            </div>
                           
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <!--<button type="button" id="boton-actualizar" class="btn btn-primary" value="submit" style="margin-top:20px; padding-top:10px; padding-bottom:10px;">Actualizar Datos</button>-->
                            	<input type="submit" id="boton-actualizar" class="btn btn-primary form-button" value="Modificar datos" style="margin-top:20px; padding-top:10px; padding-bottom:10px;"> 
                                                          
                            </div>
                        </div>                        
                    </form>
                </div>
            <div class="col-md-2 text-md-center">

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