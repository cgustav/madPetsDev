<?php
include("../../../function/setup.php");

$sql="SELECT * FROM mascotas WHERE mascotas.id_usuario='".$_POST['id']."'";
$resultado = mysqli_query(conecta(), $sql);
while($fila = mysqli_fetch_array($resultado))
{
	/*
    echo "<option value=".$fila['id_mascota'].">".$fila['nombre']."</option>";
    echo "<a class='dropdown-item' href='#'>".$fila['id_mascota']." ".$fila['nombre']."</a>";
    */
    echo "<button class='dropdown-item' type='button' value='".$fila['id_mascota']."'>".$fila['nombre']."</button>";
}
mysqli_close(conecta());

?>