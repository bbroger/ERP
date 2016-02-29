<?php 

 session_start();


 $usuario = filter_input(INPUT_POST,'usuario');
 $senha = filter_input(INPUT_POST, 'senha');
 
 require("../app/model/connect.php"); 
 
$resultado = $conecta->prepare("SELECT usuario, senha FROM `sistema` WHERE `usuario` =?  AND `senha`=? "); 
$resultado->bindParam(1, $usuario);
$resultado->bindParam(2, $senha);

if($resultado->execute()){

 if(($resultado->rowCount()) > 0) 
 	{ 
 	 $_SESSION['usuario'] = $usuario;
 	 $_SESSION['senha'] = $senha;
 	 header('location: ../app/');
   	} 
    else
    {
     unset ($_SESSION['usuario']); 
     unset ($_SESSION['senha']); 
     header('location:index.php'); 
    } 
}

else{
		echo "Erro";
		header('location:index.php'); 
	}
?>
