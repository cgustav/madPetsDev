<!doctype html>
<html lang="en">
<head>
<title>Login Usuario</title>
<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!-- Aquí CSS BOOSTRAP -->
<!--<link rel="stylesheet" href="css/boostrap.min.css">-->
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
<body>
	<form id="formLogin" name="formLogin" action="procesa-login.php" method="post">
    <table align="center" border="0" cellpadding="0" cellspacing="5">
    <tr>
    <th colspan="4"> <h1>Login Usuario</h1></th>
    </tr>
    <tr>
    <!--cuerpo -->
    <td rowspan="3">
    <img src="images/descarga.png" width="100" height="100"/>
    </td>
    </tr>
    <tr>
    <td>Username</td>
    <td>
    <input type="text" name="nombreUsuario" id="nombreUsuario" />
    </td>
    <td rowspan="4">
    <input type="button" name="Logear" id="Logear" value="Logear" onclick="enviar();" />
    </td>
    </tr>
    <tr>
    <td>Password</td>
    <td>
    <input type="password" name="pwUsuario" id="pwUsuario" />
    </td>
    </tr>
    <?php
    if (isset($_GET['error'])) {
    ?>
    <tr>
    <td colspan="3" align="center">Error de Usuario y/o Password</td>
    </tr>
    <?php
    }
    ?>
    </table>
    </form>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
