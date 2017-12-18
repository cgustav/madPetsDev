<?php
	include("../../function/setup.php");
	
	if(isset($_POST['valorMa']))
	{
		$sql="SELECT * FROM mascotas WHERE mascotas.id_mascota='".$_POST['valorMa']."'";	
		$resultado=mysqli_query(conecta(),$sql);
		$filas=mysqli_num_rows($resultado);
		if($filas===0)
		{
			echo "<center><p>Usuario NO existe en la Base de Datos :( </p></center>";	
		}
		else
		{
            $resultadoBusqueda=mysqli_fetch_array($resultado);
			
			//echo "ResBusq --> ".$resultadoBusqueda['region'];
			
            echo "
            
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title' style='color: green; font-weight: bold;'>Ficha de mascota</h3>
                        </div>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table id='tablaFormulario' align='center'>
                                <tr>
                                    <td>Nombre</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['nombre']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Especie</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['especie']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raza</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['raza']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sexo</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['sexo']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peso</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['peso']." Kg' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nacimiento</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['fecha_nacimiento']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vacunas</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['vacunaciones']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estéril</td>
                                    <td>
                                        <input type='text' value='".$resultadoBusqueda['esteril']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Descripción</td>
                                    <td>
                                        <input type='text-area' value='".$resultadoBusqueda['descripcion']."' disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Afecciones</td>
                                    <td>
                                        <input type='text-area' value='".$resultadoBusqueda['afecciones']."' disabled>
                                    </td>
                                </tr>
                                </table>
                            </div>
                                <div class='row' style='margin-top: 20px;'>
                                    <div class='col-sm-4 text-sm-left text-md-left'>
                                        <form method='POST' action='mascota-toexcel.php'>
                                            <input type='hidden' name='valid' value='".$resultadoBusqueda['id_mascota']."' />
                                            <input type='submit' class='btn btn-success' value='Exportar a Excel'>
                                        </form>
                                        </div>
                                        <div class='col-sm-4 text-sm-left text-md-left'>
                                        <form method='POST' action='mascota-topdf.php'>
                                            <input type='hidden' name='valid' value='".$resultadoBusqueda['id_mascota']."' />
                                            <input type='submit' class='btn btn-danger' value='Exportar a PDF'>
                                        </form>
                                        </div>
                                        <div class='col-sm-4 text-sm-left text-md-left'></div>
                                    </div>
                                </div>
                                <div class='row' style='margin-top: 20px;'>
                                    <div class='col-sm-10 text-sm-left text-md-left'>
                                        <form method='POST' action='vacunas-mascota.php'>
                                            <button class='btn btn-warning submit' name='btoncin' value='".$resultadoBusqueda['id_mascota']."'>Ver vacunas</button>
                                        </form>
                                    </div>
                                </div>
                
                            
                        </div>
                    </div>  
                </div>
			";	
		}
		
    }
    ?>