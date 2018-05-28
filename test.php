<?php 
	$server ='localhost';
	$user= 'root';
	$pass= '1234';
	$database= 'test_juegos';

	$conection = mysqli_connect($server,$user,$pass,$database);

	if(!$conection)
	{
		echo 'Error Connection';
	}


	$uss = $_GET['ussA'];
	$pss= $_GET['pssB'];

	$sql = "SELECT * FROM usuarios WHERE usuario LIKE '$uss' AND password LIKE '$pss'";

	$query=mysqli_query($conection,$sql);
	 

	if(mysqli_num_rows($query)>0)
		echo "Consulta Excitosa";
	else
		echo "Consula Erronea";


 ?>