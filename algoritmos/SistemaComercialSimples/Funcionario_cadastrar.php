 <!DOCTYPE html>
 <html>
 <head>
 	<title>Funcionario cadastro produtos</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<!--Area Funcionario -->
 	<div class="container">
 	<form action="Insere_produtos.php" method="post">
 		<h1>Area funcionario / Cadastrar Produto<br></h1>									<!-- O vendedor insere os produtos disponiveis-->
	 		<div class="input-group">
	 		<label><br>Nome produto:<br></label>
		    <input type="text" class="form-control" placeholder="Nome" name="name" size="20" >
			</div>
			<div class="input-group mb-3">
	 		<label><br>Código produto:<br></label>
		    <input type="text" class="form-control" placeholder="Código" name="codigo" size="19" >
			</div>
			<div class="input-group mb-3">
	 		<label><br>Valor unitário produto:<br></label>
		    <input type="text" class="form-control" placeholder="Valor unitário" name="valorUnit" size="13" >
			</div>
			<div class="input-group mb-3">
	 		<label><br>Quantidade produto:<br></label>
		    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" size="15" >
			</div>
 		<br>
 		<button type="submit" class="btn btn-primary btn-sm" value="Enviar">Enviar</button>
 	</form>
 	</div>
 </body>
 </body>
 </html>
