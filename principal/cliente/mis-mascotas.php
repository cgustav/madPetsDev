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
    <link rel="stylesheet" href="../../css/client-style.css">
    
    <?php
     if(isset($_SESSION['tipo'])){
        
     }
    ?>
    <!-- Font Js -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Icons Js -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
    <script>
    function buscaMascota(valor){
        var parametros = {
                "valorM" : valor
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'consulta-mascota.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#pruebas").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#pruebas").html(response);
                }
        });
}
    
    function imprimeFicha(valor){
        var parametros = {
                "valorMa" : valor
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'ficha-mascota.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#nuevatabla").html("<center><h1 style='color: gray;'>Procesando, espere por favor...</h1></center>");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#nuevatabla").html(response);
                }
        });
    }
    </script>
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
     <!--INICIO DE CONTENIDO-->







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
                <!-- dropdown de buttons -->
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle btn-lg" type="button" id="dropdownMascotas"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="buscaMascota(1);">
                            Seleccionar mascota
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div id="pruebas">
                        
                        </div>
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
                <div class='col-md-6 text-sm-left'>
                <div id='nuevatabla'>
                </div>
                </div
                <div class="col-md-3">
                </div>
                </div>
        </div>
    <script src="../../js/jquery-3.2.1.min.js"></script>
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