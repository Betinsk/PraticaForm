
<?php 
        require_once('validador_acesso.php');

        //variavel que verifica se a autenticacao foi realizada
   
    $usuarioAutenticado = false;

    $_POST["email"]; 
    $_POST["senha"]; 

    $test = array(
      array('email'=>'gmdust@hotmail.com', 'senha'=> '123456'),
      array('email'=>'admi@hotmail.com', 'senha'=> 'abcd'),
     
    );


    //Método que verifica autenticação das informações do usuário
    foreach ($test as $user) {
         if ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
        $usuarioAutenticado = true;
        }
    }
   

  if ($usuarioAutenticado == true) {
       $_SESSION['autenticado'] = 'SIM';
         header('Location: cadastro.php');
    }
   
  else {
    $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro' ); // força o direcionamento para a pagina
    }


 ?>