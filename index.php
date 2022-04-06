<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Simples</title>

	<style type="text/css">
		
				body {
		  background-color: linen;
		}

		.border{
			border: 3px  solid;
			margin: 50px;
		}


	</style>


</head>
<body>

	<div class="border">

	<div align="center">
		
		<h1>Formulario de cadastro</h1>

	</div>

	<div align="center">
		
		<form action="valida.php" method="post">
			
			Email :
			<input type="text" name="email" placeholder="Digite seu email"> <br/><br/>

			Senha :
			<input type="text" name="senha" placeholder="Digite sua senha"> <br/><br/>

			  <? if(isset($_GET['login']) && $_GET['login'] == 'erro') {  //Testa se o parametro login setado no metodo header na valida.php está setado e é igual a erro?> 

                    <div class="text-danger">
                      Usuário ou senha inválido(s)
                    </div>    

              <? }  ?>     

			<button type="submit">Entrar</button>

		</form>



	</div>

	</div>

</body>
</html>