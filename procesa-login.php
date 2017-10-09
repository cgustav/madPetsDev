<?php
 include'function/setup.php'; //La conexión con el sv de BD
 
 //Query que trae todos los resultados de la tabla usuarios 
 $sql="SELECT usuarios.id,usuarios.nombre,usuarios.ap_paterno,usuarios.ap_materno,usuarios.usuario, usuarios.clave, usuarios.estado, tipo_usuario.descripcion FROM tipo_usuario INNER JOIN usuarios ON tipo_usuario.idTipoUsuario = usuarios.id_tipo_usuario WHERE  usuarios.usuario='".$_POST['nombreUsuario']."' AND usuarios.clave='".$_POST['pwUsuario']."' AND usuarios.estado=1";
  
 
 $resultado=mysqli_query(conecta(),$sql);
 $total=mysqli_num_rows($resultado);
 $datos=mysqli_fetch_array($resultado);
 
  if($total!=0){//Si se han encontrado coincidencias:
	  session_start(); //se da inicio a una sesión
	  //con sus respectivas variables de sesión
	  $_SESSION['usuario']=$datos['nombre']." ".$datos['ap_paterno']." ".$datos['ap_materno'];	 
	  $_SESSION['tipo']=$datos['descripcion'];
	  $_SESSION['idUsuario']=$datos['id'];
	  header("Location: principal.php");
	   }
	   else
	   {
	   header("Location: login-user.php?error");
	   }	  		
?>