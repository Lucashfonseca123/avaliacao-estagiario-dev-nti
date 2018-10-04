<?php
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Funcionario cadastro clientes</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<!-- Area funcionario -->
 	<div class="container">
 	<form action="Registrar_vendas.php" method="post">				<!-- Cliente pede os produtos desejados -->
 		<h1>Area funcionario / Registrar vendas do cliente</h1>
 		<div class="input-group">
	 	<label><br>Código produto:<br></label>
	    <input type="text" class="form-control" placeholder="Código" name="codigoCliente" size="20" >
		</div>
		<div class="input-group mb-3">
 		<label><br>Quantidade produto:<br></label>
	    <input type="text" class="form-control" placeholder="Quantidade" name="quantidadeCliente" size="16" >
		</div>
		<br>
 		<button type="submit" class="btn btn-primary btn-sm" value="Enviar">Enviar</button>
 	</form> 	
 	</div>
 </body>
 </html>