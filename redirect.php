<?php
session_start();
if(isset($_SESSION['usuario'])){
if($_SESSION['tipo']=="Administrador"){
		header("Location: principal/admin-dev.html");
	  }else if($_SESSION['tipo']=="Veterinario"){
		header("Location: principal/vet.php");
	  }else if($_SESSION['tipo']=="Cliente"){
	  header("Location: principal/principal.php");
       }
    } 
?>