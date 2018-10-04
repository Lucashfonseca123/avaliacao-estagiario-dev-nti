<?php 
	$host = 'localhost';
	$user = "root";
	$pass = "";
	$bancoD = "empresa";
	$atual = 1;
	$con = mysqli_connect($host, $user, $pass, $bancoD);

	if($con){
				$message = "<script>alert('Conectado ao banco de dados!')</script>";
				$atual++;
			}	
			else
				$message = "<script>alert('Erro na conexao')</script>";

			echo $message;
 ?>