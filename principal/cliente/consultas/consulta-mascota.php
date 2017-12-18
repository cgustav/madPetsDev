<?php
include("../../../function/setup.php");

$sql="SELECT * FROM mascotas WHERE mascotas.id_usuario='".$_POST['id']."'";
$resultado = mysqli_query(conecta(), $sql);
while($fila = mysqli_fetch_array($resultado))
{
	
    echo "<option value=".$fila['id_mascota'].">".$fila['nombre']."</option>";
}
mysqli_close(conecta());

?>