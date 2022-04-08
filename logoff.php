<?php 
	
	session_start();
/*

	//destruir a variável de sessão
	//session_destroy()

	session_destroy(); // será destruida
	//forçar um direcionamento

*/

	session_destroy();
	header('Location: index.php');


 ?>