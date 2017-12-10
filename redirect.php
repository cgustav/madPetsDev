<?php
session_start();
if(isset($_SESSION['usuario'])){
if($_SESSION['tipo']=="Administrador"){
		header("Location: principal/admin/admin.php");
	  }else if($_SESSION['tipo']=="Veterinario"){
		header("Location: principal/veterinario/vet.php");
	  }else if($_SESSION['tipo']=="Cliente"){
	  header("Location: principal/cliente/cliente.php");
       }
    } 
?>