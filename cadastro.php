	<? require_once('validador_acesso.php');?>
	
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

		#h1{
			text-align: center;
		}

		#span{
			border: 2px solid black;
			background-color: white;
			
		}
		.border{
			border: 3px  solid;
			margin: 50px;
			text-align: right;
		}

		#form{
			padding: 50px;
		}

		

	</style>

</head>
<body>
	<div class="border" align="center">
		<h1 id="h1">Faça seu cadastro</h1>
		<span id="span"><a class="nav-link" href="logoff.php">SAIR</a></span>

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
			<input type="text" name="senha" placeholder="Digite seu senha"> <br><br>

			<button type="submit">Enviar</button>

		</form>

	</div>

</body>
</html>
