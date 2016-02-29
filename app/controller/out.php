<?php
echo "<meta charset='utf-8'>";
session_start();
	if (isset($_SESSION['usuario'])){
  		session_unset(); // Eliminar todas as variáveis da sessão
  		session_destroy(); // Destruir a sessão
  		echo "Sessão Destruida!<br> Redirecionando ...";  
  		sleep(2);
  		header('location: ../../index.php');
  		
	} else
	 {
  		echo "Acesso não autenticado!";
	}
	
?>