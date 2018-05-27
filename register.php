<html>
<body>holissss</body>
<?php 
	$server ='localhost';
	$user= 'root';
	$pass= '';
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
	 
	if(mysqli_num_rows($query)==0){
		$sql="INSERT INTO usuarios (id,usuario,password,score) VALUES (NULL,'$uss','$pss','$sc')";
		$query = mysqli_query($conection,$sql);
		echo "Success";
	}


 ?>
  </html>