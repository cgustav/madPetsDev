<?php
include("../../../function/setup.php");

$sql="SELECT * FROM vacunas WHERE vacunas.id_mascota='".$_POST['id_mascota']."'";
$resultado = mysqli_query(conecta(), $sql);
while($fila = mysqli_fetch_array($resultado))
{
	echo "          <tr>
                        <td>".$fila['detalle']."</td>
                        <td>".$fila['fecha']."</td>
                        <td>".$fila['fecha_proxima']."</td>
                    </tr>";
    
}
mysqli_close(conecta());

?>