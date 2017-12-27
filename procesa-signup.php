<?php
	include("function/setup.php");
	
	$sql="INSERT INTO usuarios SET usuario='".$_POST['usuario']."',nombre='".$_POST['nombre']."',apellidopaterno='".$_POST['apellido']."',fechaNacimiento='".$_POST['fechaNacimiento']."',fonoContacto='".$_POST['fonoContacto']."',sexo='".$_POST['sexo']."',region='".$_POST['region']."',comuna='".$_POST['comuna']."',email='".$_POST['email']."',asunto='".$_POST['asunto']."',observaciones='".$_POST['observaciones']."'";
	
	if(mysqli_query(conecta(),$sql))
	{
		header("Location:../index.html?success");	
	}
	else
	{
        
        header("Location: login-user.php?errorsign");	
	}	
	mysqli_close(conecta());



?>