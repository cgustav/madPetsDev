<!doctype html>
<html lang="en">
<head>
<title>Ingresar a MADPets</title>
<meta charset="utf-8">    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" href="../../images/rd_fav_madpets.png"/>

<!-- Aquí CSS BOOSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Main CSS -->
<link rel="stylesheet" href="css/exp-style.css">
<link rel="stylesheet" href="css/modalestyle.css">
<!--MAIN JS -->
<script src="js/valida-login.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Font Js -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- Script AwesomeFonts-->
<script src="https://use.fontawesome.com/025d1f53df.js"></script>

<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->


<!-- Script validacion campos vacíos -->
<script>
    
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</head>
<body>
<div class="row">
    <div class="login-page">
            <form id="formLogin" name ="formLogin" action="procesa-login.php" class="form" method="POST">
                <a href="../index.html"><img class="img-responsive" src="images/madpets2ndlogo.png" alt="madpets login"/></a>
                <input id="nombreUsuario" name="nombreUsuario" type="text" placeholder="Usuario"/>
                <input id="pwUsuario" name="pwUsuario" type="password" placeholder="Contraseña" onkeypress="if (event.keyCode == 13) enviar();"/>
                <button id="buttoncin" class="btn" onClick="validaLog();">Ingresar</button>
                <?php
                if (isset($_GET['error'])) {
                        ?>
                        
                            <div class="alert alert-danger" role="alert">
                                Error usuario y/o contraseña!  
                            </div>
                            
                        <?php
                        }
                ?>
                <p class="message">No tienes una cuenta? <a href="#" onclick="document.getElementById('id01').style.display='block'">Regístrate</a></p>      
            </form>
    </div>
</div>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <form id="formSignUp" name="formSignUp" class="form modal-content animate" action="procesa-signup.php" method="POST">
                            <div class="container">
                                <?php
                                if (isset($_GET['errorsign'])) {
                            ?>
                                <script>document.getElementById('id01').style.display='block'</script>
                                <div class="alert alert-danger" role="alert">
                                     error al enviar formulario  
                            </div>
                         
                            <?php
                                }
                            ?>
                            <label><b>Usuario</b></label>
                            <input id="inputUser" type="text" placeholder="Ingrese un Usuario" name="inputUser" />
                            
                            <label><b>Nombre</b></label>
                            <input id="inputName" type="text" placeholder="Ingrese su nombre" name="inputName" />

                            <label><b>Apellidos</b></label>
                            <input id="inputApe" type="text" placeholder="Ingrese sus apellidos" name="inputApe" />

                            <label><b>Email</b></label>
                            <input id="inputEmail" type="text" placeholder="Ingrese correo" name="inputEmail" />

                            <label><b>Contraseña</b></label>
                            <input id="inputPw" type="password" placeholder="Ingrese contraseña" name="inputPw" />

                            <label><b>Re-ingresar contraseña</b></label>
                            <input id="inputRePw" type="password" placeholder="Repita contraseña" name="inputRePw" />
                            <input type="checkbox" checked="checked"> Recordar
                            <p>Creando mi cuenta Acepto el <a href="#">Contrato de Términos y privacidad de MADPets</a>.</p>
                            
                            <div class="clearfix">
                                <input id="envButton" type="button" class="form button btn btn-success" onClick="validaSign();" value="Crear" />
                                <input id="cancelButton" type="button" class="form button btn btn-danger" onclick="document.getElementById('id01').style.display='none'" value="Cancelar" />
                            </div>
                            </div>
                        </form>
                    </div>
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>

</html>