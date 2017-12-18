<link href="../../css/client-style.css" rel="stylesheet" type="text/css">
<?php
	require_once '../../dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
    include("../../function/setup.php");
    
	$sql="select * from mascotas WHERE mascotas.id_mascota='".$_POST['valid']."'";
    $resultado=mysqli_query(conecta(),$sql);

    $contenido="<table align='center'>";
	while($datos=mysqli_fetch_array($resultado))
	{
        $contenido.="
                                <tr>
                                    <td>Identificacion</td>
                                    <td>".$datos['id_mascota']."</td>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>
                                        ".$datos['nombre']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Especie</td>
                                    <td>
                                        ".$datos['especie']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raza</td>
                                    <td>
                                        ".$datos['raza']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sexo</td>
                                    <td>
                                        ".$datos['sexo']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peso</td>
                                    <td>
                                        ".$datos['peso']." Kg
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nacimiento</td>
                                    <td>
                                        ".$datos['fecha_nacimiento']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vacunas</td>
                                    <td>
                                        ".$datos['vacunaciones']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estéril</td>
                                    <td>
                                        ".$datos['esteril']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Descripción</td>
                                    <td>
                                       ".$datos['descripcion']."
                                    </td>
                                </tr>
                                <tr>
                                    <td>Afecciones</td>
                                    <td>
                                        ".$datos['afecciones']."
                                    </td>
                                </tr>";		
    }
    
	$contenido.="</table>";
	
	//Lo pulento de la impresión en PDF
	$dompdf=new Dompdf();
	$dompdf->loadHtml($contenido);
	$dompdf->setPaper('A4','landscape');
	$dompdf->render();//genera el Pdf desde el contenidop html
	$pdf=$dompdf->output();//obtener el PDF generado
	$dompdf->stream();//envía el pdf al browser
	

?>