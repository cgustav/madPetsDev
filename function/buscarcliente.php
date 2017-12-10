<?php
include("function/setup.php");
if(isset($_POST["valorRut"])){
    $sql="SELECT * FROM cliente WHERE rut='".$_POST["valorRut"]."'";
    $_resultado=mysqli_query(conecta(),$sql);
    $filas=mysqli_num_rows($resultado);
    if($filas==0){
        echo"<p>Usuario NO existe en la Base de Datos</p>";
    }else{
        $resultadoBusqueda=mysqli_fetch_array($resultado);
        echo"
        <tr>
            <td>Nombre</td>
            <td>
                <input type='text' value='".$resultadoBusqueda['nombre']."' disabled>
            </td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td>
                <input type='text' value='".$resultadoBusqueda['apellido']."' disabled>
            </td>
        </tr>
        ";
    }
}
?>