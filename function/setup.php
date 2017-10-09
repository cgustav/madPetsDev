<?php
	//En caso de cambiar datos de conexión modificar estas constantes para sqli
    define("SERV_NAME","localhost");
	define("SERV_USER","root");
	define("SERV_PWD","");
	define("BD_NAME","madpets_bd");
	
	//Funcion de conexion
	function conecta(){
		$enlace =mysqli_connect(SERV_NAME,SERV_USER,SERV_PWD,BD_NAME);
		return $enlace;
	}
?>