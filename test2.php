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


	$uss = $_GET['user'];
	$pss = $_GET['pass'];
	$sc  = $_GET['score'];

	$sql = "SELECT * FROM usuarios WHERE usuario LIKE '$uss'";

	$query=mysqli_query($conection,$sql);
	 
	if(mysqli_num_rows($conection)=0)
		$sql="INSERT INTO 'usuarios'('id','usuario','password','score') VALUES (NULL,$uss,$pss,$sc)";


 ?>