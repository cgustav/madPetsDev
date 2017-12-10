<?php
//PHP para exportación de documento Clientes a formato PDF
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
include("function/setup.php");
$sql="select * from cliente";
$resultado=mysqli_query(conecta(),$sql);

$contenido="
<table border='2'>
    <tr>
        <td>Rut</td>
        <td>Nombre</td>
        <td>Apellido</td>
    </tr>
";
while($datos=mysqli_fetch_array($_resultado)){

$contenido.="
    <tr>
        <td>".$datos['rut']."</td>
        <td>".$datos['nombre']."</td>
        <td>".$datos['apellido']."</td>
    </tr>
    ";
}

$contenido.="</table>";

//DOMPDF CONF
//
//Creacion objeto tipo DomPDF
$dompdf=new Dompdf();
//Generar una carga del HTML (cargada con $contenido)
$dompdf->loadHtml($contenido);
//Parametros de configuración PDF
$dompdf->setPaper('A4','landscape');
//Generación del documento PDF, desde el $contenido
$dompdf->render();
//Obtener el PDF generado
$pdf=$dompdf->output();
//Envia el PDF al Browser 
$dompdf->stream();

?>