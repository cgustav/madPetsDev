<!doctype html>
<html lang="en">
<head>
<title>Ingresar a MADPets</title>
<meta charset="utf-8">    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!-- Aquí CSS BOOSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Main CSS -->
<link rel="stylesheet" href="css/gen-style.css">
<link rel="stylesheet" href="css/login-style.css">
<!-- Font Js -->
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<!-- Script AwesomeFonts-->
<script src="https://use.fontawesome.com/025d1f53df.js"></script>
<!-- Script validacion campos vacíos -->
<script>
function enviar(){
	//En JS se pueden tratar los formularios como objetos con respectivos atributos
	if(document.formLogin.nombreUsuario.value==""){
		alert("Debe ingresar un usuario");
		document.formLogin.nombreUsuario.focus();
		return false(); //evitar refresh de la página, conservar datos del formulario
		}
	if(document.formLogin.pwUsuario.value==""){
			alert("Debe ingresar una password");
		document.formLogin.pwUsuario.focus();
		return false();
			}
			document.formLogin.submit();
	}
</script>
</head>
<!--


-->
<body>
<div class="container formu-log">
<div class="row">
    <div class="col-md-3 text-md-center">
        
    </div>
    <div class="col-md-6 text-md-center">
        <form id="formLogin" name ="formLogin" action="procesa-login.php" class="form-horizontal" method="POST">
            <div class="container head-log">
                <div class="logo">
                    <img src="images/madpets2ndlogo.png" tag="madpets png">
                </div>
            </div>
            <div class="container body-log">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Usuario/Correo electrónico"/>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" name="pwUsuario" id="pwUsuario" class="form-control" placeholder="Contraseña"/>
                </div>
                <div class="form-group">
                    <input type="submit" id="Ingresar" name="Ingresar" value="Ingresar" class="btn btn-success btn-block" onclick="enviar();" />
                </div>
                <div class="container showhint">
                    <!--Si Usuario y contraseña no coinciden: -->
                <?php
                    if (isset($_GET['error'])) {
                ?>
                    <h2>Error de Usuario y/o Password</h2>
                </div>
                <?php
                }
                ?>
                </div>
            </div>    
    </form>
    </div>
            <div class="col-md-3 text-md-center">

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
