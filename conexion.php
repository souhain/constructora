<?php
		
function conectar(){
//$servidor="localhost";
//$clave="";
//$db="ch";
//$con=PDO_MYSQL($servidor,$usuario,$clave);
//PDO_MYSQL($db,$con);
//return $con;

//$mbd = new PDO('mysql:host=localhost;dbname=ch', $usuario, $clave);
	  
     $con=mysqli_connect("localhost","root","","ch");
// Check connection
if (mysqli_connect_errno())
  {
  echo "No hay conexion a la base de datos  " . mysqli_connect_error();
  }
}


$mysqli = new MySQLi("localhost", "root","", "ch");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else{}



?>
