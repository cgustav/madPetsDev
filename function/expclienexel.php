<?php
//PHP para exportación de documento Clientes a formato Excel
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Type: application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=clientes.xls");
header("Expires:0");

include("function/setup.php");
$_sql="select * from cliente";
$_resultado=mysqli_query(conecta(), $sql);
?>

<table>
    <tr>
        <td>Rut</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td></td>
    </tr>
<?php
while($datos=mysqli_fetch_array($_resultado)){
?>    
<tr>
        <td><?php echo $_datos['rut']; ?></td>
        <td><?php echo $_datos['nombre']; ?></td>
        <td><?php echo $_datos['apellido']; ?></td>
    </tr>
</table>

<?php
}
?>