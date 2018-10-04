<?php 
	require ('Conexao.php');

		if(isset($_POST ['codigoCliente'])){
			$cod = $_POST['codigoCliente'];
		}

		if (isset($_POST['quantidadeCliente'])) {
			$qtd = $_POST['quantidadeCliente'];
		}

	$sql = "INSERT INTO cliente VALUES ('$cod', '$qtd')";
	$insert = mysqli_query($con, $sql);
	if($insert)
		$insert_message = "Codigo cliente inseridos com sucesso!";
	else
		$insert_message = mysqli_error($connection);

	echo $insert_message;
 ?>