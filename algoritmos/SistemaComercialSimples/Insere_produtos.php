<?php 
	require ('Conexao.php');

		if(isset($_POST ['name'])){
			$nome = $_POST['name'];
		}
		if(isset($_POST ['codigo'])){
			$cod = $_POST['codigo'];
		}
		if (isset($_POST ['valorUnit'])) {
			$val = $_POST['valorUnit'];
		}
		if (isset($_POST['quantidade'])) {
			$qtd = $_POST['quantidade'];
		}

	$sql = "INSERT INTO produto VALUES ('$nome', '$cod', '$val', '$qtd')";
	$insert = mysqli_query($con, $sql);

	if($insert)
		$insert_message = "Dados inseridos com sucesso!";
	else
		$insert_message = mysqli_error($connection);

	echo $insert_message;

 ?>