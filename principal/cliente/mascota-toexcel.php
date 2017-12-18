<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../../images/rd_fav_madpets.png"/>

    <title>Principal MADPets</title>
    <!-- BOOTSTRAP CSS-->
    <style>
            table {
            margin-top: 30px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #76e6ae;
        }
        .col-center{
            float: none;
            margin: 0 auto;
        }
    </style>
</head>
<?php
	header("Content-Type: application/vnd.ms-excel; charset=utf-8");
	header("Content-Type: application/x-msexcel; charset=utf-8");
	header("Content-Disposition: attachment; filename=MADPets-ficha.xls");
	header("Expires:0");
    include("../../function/setup.php");
    	
	$sql="select * from mascotas WHERE mascotas.id_mascota='".$_POST['valid']."'";
    $resultado=mysqli_query(conecta(),$sql);
    ?>
	<table id='tablaFormulario' align='center'>
    <?php
    while($datos=mysqli_fetch_array($resultado))
	{
	?>
                                <tr>
                                    <td>Identificacion</td>
                                    <td>
                                        <?php echo $datos['id_mascota'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>
                                        <?php echo $datos['nombre'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Especie</td>
                                    <td>
                                        <?php echo $datos['especie'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raza</td>
                                    <td>
                                        <?php echo $datos['raza'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sexo</td>
                                    <td>
                                        <?php echo $datos['sexo'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peso</td>
                                    <td>
                                        <?php echo $datos['peso'];?> Kg
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nacimiento</td>
                                    <td>
                                        <?php echo $datos['fecha_nacimiento'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vacunas</td>
                                    <td>
                                        <?php echo $datos['vacunaciones'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estéril</td>
                                    <td>
                                        <?php echo $datos['esteril'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Descripción</td>
                                    <td>
                                       <?php echo $datos['descripcion'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Afecciones</td>
                                    <td>
                                        <?php echo $datos['afecciones'];?>
                                    </td>
                                </tr>
    <?php
	}
	?>
</table>
<?php
mysqli_close(conecta());
?>