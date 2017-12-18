<?php
	include("function/setup.php");
	
	if(isset($_POST['rut']))
	{
		$sqlmodifica="UPDATE cliente  SET nombre='".$_POST['nombre']."', apep='".$_POST['apeP']."',nombre='".$_POST['apeM']."', email='".$_POST['email']."'  WHERE rut='".$_POST['rut']."'";
		
		if(mysqli_query(conecta(),$sqlmodifica))
		{
			header("Location:formularioModificaCliente.php");	
		}
		else
		{
			echo "Error: ".$sql."<br>".mysqli_error(conecta());	
		}	
		mysqli_close(conecta());
	}

?>