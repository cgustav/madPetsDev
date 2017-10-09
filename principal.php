<?php
session_start();
if(isset($_SESSION['usuario'])){ 
?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<table align="right" width="30%" border="0">
<tr>
<th colspan="2">Bienvenido</th>
</tr>
<tr>
<td width="60%" align="center">
<?php echo $_SESSION['usuario']; ?>
<br />
Tipo de usuario : <?php echo $_SESSION['tipo']; ?>
</td>
<td width="40%" align="center">
<a href="cerrarsesion.php">
<img src="images/logout-xxl.png" width="50"/>
  </a>
</td>
</tr>
</table>
</body>
</html>
<?php 
}else{
	header("Location:error.php");
	} 
?>