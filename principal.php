<?php
session_start();
if(isset($_SESSION['usuario'])){ 
?>
	
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Principal MADpets</title>
<!-- BOOTSTRAP CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Main CSS -->
<link rel="stylesheet" href="css/gen-style.css">
<!-- Font Js -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- Icons Js -->
<script src="https://use.fontawesome.com/025d1f53df.js"></script>
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