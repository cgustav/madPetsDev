<?php
	include("function/setup.php");
	
	$sql="INSERT INTO cliente SET rut='".$_POST['rut']."',nombre='".$_POST['nombre']."',apellido='".$_POST['apellido']."',fechaNacimiento='".$_POST['fechaNacimiento']."',fonoContacto='".$_POST['fonoContacto']."',sexo='".$_POST['sexo']."',region='".$_POST['region']."',comuna='".$_POST['comuna']."',email='".$_POST['email']."',asunto='".$_POST['asunto']."',observaciones='".$_POST['observaciones']."'";
	
	if(mysqli_query(conecta(),$sql))
	{
		header("Location:formularioIngreso.php");	
	}
	else
	{
		echo "Error: ".$sql."<br>".mysqli_error(conecta());	
	}	
	mysqli_close(conecta());



?>