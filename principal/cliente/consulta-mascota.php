<?php
include("../../function/setup.php");

$sql= "SELECT * FROM mascotas WHERE mascotas.id_usuario = '".$_POST['valorM']."'";
$resultado = mysqli_query(conecta(), $sql);
while($fila = mysqli_fetch_array($resultado))
{
    echo "<button class='dropdown-item' type='button' value='".$fila['id_mascota']."' onclick='imprimeFicha(".$fila['id_mascota'].");'> ".$fila['nombre']."</button>";
}
mysqli_close(conecta());
?>