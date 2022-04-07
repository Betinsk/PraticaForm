	<?php 

		 session_start();

		  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
  			header('Location: index.php?login=erro');
  }
	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>


	<style type="text/css">
		
		body {
		  background-color: linen;
		}

		.border{
			border: 3px  solid;
			margin: 50px;
		}

		#form{
			padding: 50px;
		}


	</style>

</head>
<body>
	<div class="border" align="center">
		<h1 >Faça seu cadastro</h1>
	</div>

	<div id="form">
			
		<form>
			
			Email: 
			<input type="text" name="email" placeholder="Digite seu email"><br>
			Nome: 
			<input type="text" name="nome" placeholder="Digite seu nome"><br>
			Endereço:
			<input type="text" name="endereco" placeholder="Digite seu Endereço"> <br>
			Telefone:
			<input type="text" name="telefone" placeholder="Digite seu telefone"> <br>
			Senha:
			<input type="text" name="senha" placeholder="Digite seu senha"> <br>

		</form>

	</div>

</body>
</html>
