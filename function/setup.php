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

	//fechas

	function fecha_bd($fecha)
	{
		/*$fecha_esp="18-07-2017";*/
		$dia=substr($fecha,0,2);
		$mes=substr($fecha,3,2);
		$anho=substr($fecha,6,4);
		$fecha=$anho."-".$mes."-".$dia;		
		
		return $fecha;
	
	}
	
	function fecha_esp($fecha)
	{
		/*$fecha_bd="2017-07-18";*/
		$anho=substr($fecha,0,4);
		$mes=substr($fecha,5,2);
		$dia=substr($fecha,8,2);	
		$fecha=$dia."-".$mes."-".$anho;
		
		return $fecha;
	}
	
	function fecha()
	{
		$fecha=date('d-m-Y');	
		return $fecha;
	}
	
	function hora()
	{
		date_default_timezone_set('Chile/continental');
		$hora=date('H:i:s');
		return $hora;
	}
?>